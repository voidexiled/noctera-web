<?php
global $config, $db;
require_once 'common.php';
require_once 'config.php';
require_once 'config.local.php';
require_once SYSTEM . 'functions.php';
require_once SYSTEM . 'init.php';
require_once SYSTEM . 'status.php';

// error function
function sendError($msg)
{
  $ret = [];
  $ret['errorCode'] = 3;
  $ret['errorMessage'] = $msg;
  die(json_encode($ret));
}

// event schedule function
function parseEvent($table1, $date, $table2)
{
  if ($table1) {
    if ($date) {
      $date = ($table2) ? $table1->getAttribute('startdate') : $table1->getAttribute('enddate');
      return date_create("{$date}")->format('U');
    } else {
      foreach ($table1 as $attr) {
        if ($attr) {
          return $attr->getAttribute($table2);
        }
      }
    }
  }
}

// compendium function
function jsonCompendium()
{
    $filePath = config('server_path') . 'compendium.json';
    if (file_exists($filePath)) {
        $fileContents = file_get_contents($filePath);
        $jsonData = json_decode($fileContents, true);

        if ($jsonData !== null) {
            $categoryCounts = $jsonData['categorycounts'];
            $gamenews = $jsonData['gamenews'];

            $response = [
                'categorycounts' => $categoryCounts,
                'gamenews' => $gamenews,
                'idOfNewestReadEntry' => 0,
                'isreturner' => false,
                'lastupdatetimestamp' => 0,
                'maxeditdate' => 0,
                'showrewardnews' => true,
            ];
            return $response;
        } else {
            return ['error' => 'Failed to decode JSON'];
        }
    } else {
        return ['error' => 'File not found'];
    }
}

$request = file_get_contents('php://input');
$result  = json_decode($request);
$action  = $result->type ?? '';

switch ($action) {
  case 'news':
    die(json_encode(
      jsonCompendium()
    ));

  case 'cacheinfo':
    $playersonline = $db->query("SELECT count(*) FROM `players_online`")->fetchAll();
    die(json_encode([
      'playersonline'        => (intval($playersonline[0][0])),
      'twitchstreams'        => 0,
      'twitchviewer'         => 0,
      'gamingyoutubestreams' => 0,
      'gamingyoutubeviewer'  => 0
    ]));

    case 'eventschedule':
      $eventlist = [];

      $json_file_path = config('server_path') . 'data/json/eventscheduler/events.json';
      $xml_file_path = config('server_path') . 'data/XML/events.xml';

      if (file_exists($json_file_path)) {
          $jsonContent = file_get_contents($json_file_path);
          $events = json_decode($jsonContent, true);

          if (json_last_error() !== JSON_ERROR_NONE) {
              error_log("Error parsing JSON: " . json_last_error_msg());
              die(json_encode([]));
          }

          foreach ($events['events'] as $event) {
              if ($event) {
                  $startdate = strtotime($event['startdate'] ?? ''); // Convert start date to timestamp
                  $enddate = strtotime($event['enddate'] ?? '');     // Convert end date to timestamp

                  $eventData = [
                      'colorlight'      => $event['colors']['colorlight'] ?? '',
                      'colordark'       => $event['colors']['colordark'] ?? '',
                      'description'     => $event['description'] ?? '',
                      'displaypriority' => intval($event['details']['displaypriority'] ?? 0),
                      'enddate'         => $enddate,
                      'isseasonal'      => getBoolean(intval($event['details']['isseasonal'] ?? 0)),
                      'name'            => $event['name'] ?? '',
                      'startdate'       => $startdate,
                      'specialevent'    => getBoolean(intval($event['details']['specialevent'] ?? 0))
                  ];
                  $eventlist[] = $eventData;
              }
          }

      } elseif (file_exists($xml_file_path)) {
          $xml = new DOMDocument;
          $xml->load($xml_file_path);
          $tableevent = $xml->getElementsByTagName('event');

          foreach ($tableevent as $event) {
              if ($event) {
                  $eventData = [
                      'colorlight'      => parseEvent($event->getElementsByTagName('colors'), false, 'colorlight'),
                      'colordark'       => parseEvent($event->getElementsByTagName('colors'), false, 'colordark'),
                      'description'     => parseEvent($event->getElementsByTagName('description'), false, 'description'),
                      'displaypriority' => intval(parseEvent($event->getElementsByTagName('details'), false, 'displaypriority')),
                      'enddate'         => strtotime(parseEvent($event, true, false)), // Convert end date to timestamp
                      'isseasonal'      => getBoolean(intval(parseEvent($event->getElementsByTagName('details'), false, 'isseasonal'))),
                      'name'            => $event->getAttribute('name'),
                      'startdate'       => strtotime(parseEvent($event, true, true)), // Convert start date to timestamp
                      'specialevent'    => getBoolean(intval(parseEvent($event->getElementsByTagName('details'), false, 'specialevent')))
                  ];
                  $eventlist[] = $eventData;
              }
          }
      } else {
          die(json_encode([]));
      }

      error_log("Event list prepared: " . print_r($eventlist, true));
      error_log("Last update timestamp: " . time());

      $response = [
          'eventlist' => $eventlist,
          'lastupdatetimestamp' => time()
      ];
      header('Content-Type: application/json');
      echo json_encode($response);
      break;
  case 'boostedcreature':
    $creatureBoost = $db->query("SELECT * FROM " . $db->tableName('boosted_creature'))->fetchAll();
    $bossBoost     = $db->query("SELECT * FROM " . $db->tableName('boosted_boss'))->fetchAll();
    die(json_encode([
      'boostedcreature' => true,
      'creatureraceid'  => intval($creatureBoost[0]['raceid']),
      'bossraceid'      => intval($bossBoost[0]['raceid'])
    ]));

  case 'login':
    $ip   = configLua('ip');
    $port = configLua('gameProtocolPort');

    // default world info
    $world = [
      'id'                         => 0,
      'name'                       => configLua('serverName'),
      'externaladdress'            => $ip,
      'externaladdressprotected'   => $ip,
      'externaladdressunprotected' => $ip,
      'externalport'               => $port,
      'externalportprotected'      => $port,
      'externalportunprotected'    => $port,
      'previewstate'               => 0,
      'location'                   => 'BRA', // BRA, EUR, USA
      'anticheatprotection'        => false,
      'pvptype'                    => array_search(configLua('worldType'), ['pvp', 'no-pvp', 'pvp-enforced']),
      'istournamentworld'          => false,
      'restrictedstore'            => false,
      'currenttournamentphase'     => 2
    ];

    $account = new OTS_Account();
    $account->findByEmail($result->email);
    $config_salt_enabled = fieldExist('salt', 'accounts');
    $current_password    = encrypt(($config_salt_enabled ? $account->getCustomField('salt') : '') . $result->password);

    if (!$account->isLoaded() || $account->getPassword() != $current_password) {
      sendError('Email or password is not correct.');
    }

    if ($config['account_verified_only'] && $config['mail_enabled'] && $config['account_mail_verify'] && $account->getCustomField('email_verified') != '1') {
      sendError('You need to verify your account, enter in our site and resend verify e-mail!');
    }

    // common columns
    $columns    = 'name, level, sex, vocation, looktype, lookhead, lookbody, looklegs, lookfeet, lookaddons, lastlogin, isreward, istutorial, ismain, hidden';
    $players    = $db->query("SELECT {$columns} FROM players WHERE account_id = {$account->getId()} AND deletion = 0");
    $characters = [];
    if ($players && $players->rowCount() > 0) {
      $players = $players->fetchAll();
      foreach ($players as $player) {
        $characters[] = createChar($config, $player);
      }
    }

    $query = $db->query("SELECT `premdays`, `lastday` FROM `accounts` WHERE `id` = {$account->getId()}");
    $premU = 0;
    if ($query->rowCount() > 0) {
      $premU = checkPremium($db, $query->fetch(), $account);
    } else {
      sendError("Error while fetching your account data. Please contact admin.");
    }

    $worlds   = [$world];
    $playdata = compact('worlds', 'characters');
    $session  = [
      'sessionkey'                    => "$result->email\n$result->password",
      'lastlogintime'                 => $account ? $account->getLastLogin() : 0,
      'ispremium'                     => $account->isPremium(),
      'premiumuntil'                  => $premU,
      'status'                        => 'active', // active, frozen or suspended
      'returnernotification'          => false,
      'showrewardnews'                => true,
      'isreturner'                    => true,
      'fpstracking'                   => false,
      'optiontracking'                => false,
      'tournamentticketpurchasestate' => 0,
      'emailcoderequest'              => false
    ];
    die(json_encode(compact('session', 'playdata')));

  default:
    sendError("Unrecognized event {$action}.");
    break;
}

/**
 * Function to create char in list
 * @param $config
 * @param $player
 * @return array
 */
function createChar($config, $player)
{
  return [
    'worldid'                          => 0,
    'name'                             => $player['name'],
    'ismale'                           => intval($player['sex']) === 1,
    'tutorial'                         => (bool)$player['istutorial'],
    'level'                            => intval($player['level']),
    'vocation'                         => $config['vocations'][$player['vocation']],
    'outfitid'                         => intval($player['looktype']),
    'headcolor'                        => intval($player['lookhead']),
    'torsocolor'                       => intval($player['lookbody']),
    'legscolor'                        => intval($player['looklegs']),
    'detailcolor'                      => intval($player['lookfeet']),
    'addonsflags'                      => intval($player['lookaddons']),
    'ishidden'                         => (bool)$player['hidden'],
    'istournamentparticipant'          => false,
    'ismaincharacter'                  => (bool)($player['ismain']),
    'dailyrewardstate'                 => intval($player['isreward']),
    'remainingdailytournamentplaytime' => 0
  ];
}

/**
 * Function to check account has premium time and update days
 * @param $db
 * @param $query
 * @param $account
 * @return float|int
 */
function checkPremium($db, $query, $account)
{
  $lastDay = (int)$query['lastday'];
  $timeNow = time();

  if ($lastDay < $timeNow) {
    $premDays = 0;
    $lastDay  = 0;
  } else if ($lastDay == 0) {
    $premDays = 0;
  } else {
    $daysLeft = (int)(($lastDay - $timeNow) / 86400);
    $timeLeft = (int)(($lastDay - $timeNow) % 86400);
    if ($daysLeft > 0) {
      $premDays = $daysLeft;
    } else if ($timeLeft > 0) {
      $premDays = 1;
    } else {
      $premDays = 0;
      $lastDay  = 0;
    }
  }

  $db->query("UPDATE `accounts` SET `premdays` = {$premDays}, `lastday` = {$lastDay} WHERE `id` = {$account->getId()}");
  return $lastDay;
}
