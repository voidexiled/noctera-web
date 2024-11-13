<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* serverinfo.html.twig */
class __TwigTemplate_6c159006db77b95c907a92318ed8ab0b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<script>
  var serverSaveTime = new Date(";
        // line 2
        echo twig_escape_filter($this->env, ($context["serverSaveTime"] ?? null), "html", null, true);
        echo ");
  var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = serverSaveTime - now;
    var hours = Math.floor(distance / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    hours = hours < 10 ? \"0\" + hours : hours;
    minutes = minutes < 10 ? \"0\" + minutes : minutes;
    seconds = seconds < 10 ? \"0\" + seconds : seconds;
    document.getElementById(\"timerServerSave_hour\").innerHTML = hours + \"h \";
    document.getElementById(\"timerServerSave_minute\").innerHTML = minutes + \"m \";
    document.getElementById(\"timerServerSave_second\").innerHTML = seconds + \"s \";

    if (distance < 0) {
      clearInterval(x);
      document.getElementById(\"timerServerSave_hour\").innerHTML = \"Server save now!\";
    }
  }, 1000);
</script>

<div style=\"text-align:center\">
  <h1>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lua", [], "any", false, false, false, 24), "serverName", [], "any", false, false, false, 24), "html", null, true);
        echo "</h1>
</div>
<div class=\"SmallBox\">
  <div class=\"MessageContainer\">
    <div class=\"BoxFrameHorizontal\"
         style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-horizontal.gif);\"></div>
    <div class=\"BoxFrameEdgeLeftTop\"
         style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></div>
    <div class=\"BoxFrameEdgeRightTop\"
         style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></div>
    <div class=\"Message\">
      <div class=\"BoxFrameVerticalLeft\"
           style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></div>
      <div class=\"BoxFrameVerticalRight\"
           style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></div>
      <table style=\"width:100%;\">
        <tbody>
        <tr>
          <td style=\"width:100%;text-align:center;\">
            <nobr>[<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("commands"), "html", null, true);
        echo "\">Commands</a>]</nobr>
            <nobr>[<a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("team"), "html", null, true);
        echo "\">Support List</a>]</nobr>
            <nobr>[<a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("rules"), "html", null, true);
        echo "\">Server Rules</a>]</nobr>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
    <div class=\"BoxFrameHorizontal\"
         style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-horizontal.gif);\"></div>
    <div class=\"BoxFrameEdgeRightBottom\"
         style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></div>
    <div class=\"BoxFrameEdgeLeftBottom\"
         style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></div>
  </div>
</div>
<br>
<div style=\"display: flex;\">
  <div
    style=\"width: 100%; display: grid; justify-content: center; text-align: center; max-height: 120px; margin-top: 3%;\">
    <p style=\"font-size: 24px; font-weight: bold; margin: 0;\">Server Save<br></p>
    <small style=\"margin: 0 0 10px 0;\">Every day ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["serverSave"] ?? null), 0, [], "any", false, false, false, 64), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["serverSave"] ?? null), 1, [], "any", false, false, false, 64), "html", null, true);
        echo "</small>
    <div style=\"display: flex;\">
      <div
        style=\"padding: 10px; box-shadow: 3px 3px 2px #875f3e; border: 1px solid #5f4d41; background-color: #d4c0a1; border-radius: 5px 0 0 5px;\">
        <label>hours</label>
        <div id=\"timerServerSave_hour\" style=\"font-size: 24px; font-weight: bold;\"></div>
      </div>
      <div
        style=\"padding: 10px; box-shadow: 3px 3px 2px #875f3e; border: 1px solid #5f4d41; background-color: #d4c0a1;\">
        <label>minutes</label>
        <div id=\"timerServerSave_minute\" style=\"font-size: 24px; font-weight: bold;\"></div>
      </div>
      <div
        style=\"padding: 10px; box-shadow: 3px 3px 2px #875f3e; border: 1px solid #5f4d41; background-color: #d4c0a1; border-radius: 0 5px 5px 0;\">
        <label>seconds</label>
        <div id=\"timerServerSave_second\" style=\"font-size: 24px; font-weight: bold;\"></div>
      </div>
    </div>
  </div>

  <div style=\"width: 100%;\">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
      <tbody>
      <tr>
        <td>
          <div class=\"TableContainer\">
            <div class=\"CaptionContainer\">
              <div class=\"CaptionInnerContainer\">
                <span class=\"CaptionEdgeLeftTop\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                <span class=\"CaptionEdgeRightTop\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                <span class=\"CaptionBorderTop\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
                <span class=\"CaptionVerticalLeft\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
                <div class=\"Text\">
                  <div style=\"height: 16px;\">Server Info</div>
                </div>
                <span class=\"CaptionVerticalRight\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
                <span class=\"CaptionBorderBottom\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
                <span class=\"CaptionEdgeLeftBottom\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                <span class=\"CaptionEdgeRightBottom\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
              </div>
            </div>
            <table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
              <tbody>
              <tr>
                <td>
                  <div class=\"InnerTableContainer\">
                    <table style=\"width:100%;\">
                      <tbody>
                      <tr>
                        <td>
                          <div class=\"TableContentContainer\">
                            <table class=\"TableContent\" width=\"100%\">
                              <tbody>
                              <tr bgcolor=\"#D4C0A1\">
                                <td><b>IP:</b> ";
        // line 126
        echo twig_escape_filter($this->env, ($context["serverIp"] ?? null), "html", null, true);
        echo " (Port: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lua", [], "any", false, false, false, 126), "loginPort", [], "any", false, false, false, 126), "html", null, true);
        echo ")</td>
                              </tr>
                              <tr bgcolor=\"#F1E0C6\">
                                <td><b>Client: </b> ";
        // line 129
        echo twig_escape_filter($this->env, ($context["clientVersion"] ?? null), "html", null, true);
        echo "</td>
                              </tr>
                              <tr bgcolor=\"#D4C0A1\">
                                <td><b>Uptime:</b> ";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "uptimeReadable", [], "any", false, false, false, 132), "html", null, true);
        echo " </td>
                              </tr>
                              <tr bgcolor=\"#F1E0C6\">
                                <td><b>Global save: </b> ";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["serverSave"] ?? null), 0, [], "any", false, false, false, 135), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["serverSave"] ?? null), 1, [], "any", false, false, false, 135), "html", null, true);
        echo "</td>
                              </tr>
                              <tr bgcolor=\"#D4C0A1\">
                                <td><b>World type:</b> ";
        // line 138
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lua", [], "any", false, false, false, 138), "worldType", [], "any", false, false, false, 138)), "html", null, true);
        echo "</td>
                              </tr>
                              <tr bgcolor=\"#F1E0C6\">
                                <td><b>Protection level: </b> ";
        // line 141
        echo twig_escape_filter($this->env, ($context["protectionLevel"] ?? null), "html", null, true);
        echo "</td>
                              </tr>
                              <tr bgcolor=\"#D4C0A1\">
                                <td><b>Loot: </b> x";
        // line 144
        echo twig_escape_filter($this->env, ($context["rateLoot"] ?? null), "html", null, true);
        echo "</td>
                              </tr>
                              <tr bgcolor=\"#F1E0C6\">
                                <td><b>Spawn:</b> x";
        // line 147
        echo twig_escape_filter($this->env, ($context["rateSpawn"] ?? null), "html", null, true);
        echo "</td>
                              </tr>
                              <tr bgcolor=\"#D4C0A1\">
                                <td><b>House rent: </b> ";
        // line 150
        echo twig_escape_filter($this->env, ($context["houseRent"] ?? null), "html", null, true);
        echo "
                                  <br>";
        // line 151
        if (($context["houseOld"] ?? null)) {
            echo "Houses with inactive owners are cleaned after 30 days.";
        }
        // line 152
        echo "                                </td>
                              </tr>
                              <tr bgcolor=\"#F1E0C6\">
                                <td>
                                  <b>Level to create
                                    guild:</b>";
        // line 157
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "guild_need_level", [], "any", false, false, false, 157) > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "guild_need_level", [], "any", false, false, false, 157), "html", null, true);
            echo " ";
        } else {
            echo " no level ";
        }
        // line 158
        echo "                                </td>
                              </tr>
                              ";
        // line 160
        if (($context["houseLevel"] ?? null)) {
            // line 161
            echo "                                <tr bgcolor=\"#D4C0A1\">
                                  <td><b>Level to buy house:</b> ";
            // line 162
            echo twig_escape_filter($this->env, ($context["houseLevel"] ?? null), "html", null, true);
            echo "</td>
                                </tr>
                              ";
        }
        // line 165
        echo "                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<br>
<div style=\"display: flex;\">
  <div style=\"width: 98%; padding: 5px 0;\">
    ";
        // line 187
        if ( !($context["rateUseStages"] ?? null)) {
            // line 188
            echo "      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
        <tbody>
        <tr>
          <td>
            <div class=\"TableContainer\">
              <div class=\"CaptionContainer\">
                <div class=\"CaptionInnerContainer\">
                <span class=\"CaptionEdgeLeftTop\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                  <span class=\"CaptionEdgeRightTop\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                  <span class=\"CaptionBorderTop\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
                  <span class=\"CaptionVerticalLeft\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
                  <div class=\"Text\">
                    <div style=\"height: 16px;\">Rates</div>
                  </div>
                  <span class=\"CaptionVerticalRight\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
                  <span class=\"CaptionBorderBottom\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
                  <span class=\"CaptionEdgeLeftBottom\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                  <span class=\"CaptionEdgeRightBottom\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                </div>
              </div>
              <table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
                <tbody>
                <tr>
                  <td>
                    <div class=\"InnerTableContainer\">
                      <table style=\"width:100%;\">
                        <tbody>
                        <tr>
                          <td>
                            <div class=\"TableContentContainer\">
                              <table class=\"TableContent\" width=\"100%\">
                                <tbody>
                                <tr bgcolor=\"#D4C0A1\">
                                  <td><b>Exp Rate:</b> x";
            // line 229
            echo twig_escape_filter($this->env, ($context["rateExp"] ?? null), "html", null, true);
            echo "</td>
                                </tr>
                                <tr bgcolor=\"#F1E0C6\">
                                  <td><b>Magic Level: </b> x";
            // line 232
            echo twig_escape_filter($this->env, ($context["rateMagic"] ?? null), "html", null, true);
            echo "</td>
                                </tr>
                                <tr bgcolor=\"#D4C0A1\">
                                  <td><b>Skills:</b> x";
            // line 235
            echo twig_escape_filter($this->env, ($context["rateSkill"] ?? null), "html", null, true);
            echo "</td>
                                </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </td>
        </tr>
        </tbody>
      </table>
    ";
        } else {
            // line 255
            echo "      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"padding-bottom: 10px;\">
        <tbody>
        <tr>
          <td>
            <div class=\"TableContainer\">
              <div class=\"CaptionContainer\">
                <div class=\"CaptionInnerContainer\">
                <span class=\"CaptionEdgeLeftTop\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                  <span class=\"CaptionEdgeRightTop\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                  <span class=\"CaptionBorderTop\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
                  <span class=\"CaptionVerticalLeft\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
                  <div class=\"Text\">
                    <div style=\"height: 16px;\">Rates Exp based on Level:</div>
                  </div>
                  <span class=\"CaptionVerticalRight\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
                  <span class=\"CaptionBorderBottom\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
                  <span class=\"CaptionEdgeLeftBottom\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                  <span class=\"CaptionEdgeRightBottom\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                </div>
              </div>
              <div style=\"top: 15px;\" id=\"ExpTableCollapse\" class=\"BigToggleButton\"
                   onclick=\"CollapseTable('ExpTableCollapseContainer'); \$('#labelshow').html(\$('#labelshow').html() === 'show' ? 'hide' : 'show');\"
                   onmouseover=\"ActivateHelperDiv(\$(this), '', 'Click here to expand the list of experience rates.', '');\"
                   onmouseout=\"\$('#HelperDivContainer').hide();\">
                <div id=\"Indicator_ExpTableCollapseContainer\" class=\"CircleSymbolMinus\"
                     style=\"position: absolute; height: 18px; width: 18px; top: -8px; right: -8px; z-index: 99; cursor: pointer; background-image: url(";
            // line 288
            echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
            echo "templates/tibiacom/images/global/content/circle-symbol-plus.gif);\"></div>
              </div>
              <table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%\">
                <tbody>
                <tr>
                  <td>
                    <div class=\"InnerTableContainer\" id=\"ExpTableCollapseContainer\" style=\"display: none; margin: 0;\">
                      <table class=\"TableContent\" width=\"100%\">
                        <tbody>
                        <tr>
                          <th>From level</th>
                          <th>To level</th>
                          <th>Exp rate</th>
                        </tr>
                        ";
            // line 302
            $context["i"] = 0;
            // line 303
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["rateStages"] ?? null), "experienceStages", [], "any", false, false, false, 303));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 304
                echo "                          ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 305
                echo "                          <tr bgcolor=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
                echo "\">
                            <td>";
                // line 306
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "minlevel", [], "any", false, false, false, 306), "html", null, true);
                echo "</td>
                            <td>";
                // line 307
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "maxlevel", [], "any", false, false, false, 307))) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "maxlevel", [], "any", false, false, false, 307), "html", null, true);
                    echo " ";
                } else {
                    echo " - ";
                }
                echo "</td>
                            <td>";
                // line 308
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "multiplier", [], "any", false, false, false, 308), "html", null, true);
                echo "x</td>
                          </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 311
            echo "                        </tbody>
                      </table>
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </td>
        </tr>
        </tbody>
      </table>

      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"padding-bottom: 10px;\">
        <tbody>
        <tr>
          <td>
            <div class=\"TableContainer\">
              <div class=\"CaptionContainer\">
                <div class=\"CaptionInnerContainer\">
                <span class=\"CaptionEdgeLeftTop\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                  <span class=\"CaptionEdgeRightTop\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                  <span class=\"CaptionBorderTop\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
                  <span class=\"CaptionVerticalLeft\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
                  <div class=\"Text\">
                    <div style=\"height: 16px;\">Rates Skills based on Level:</div>
                  </div>
                  <span class=\"CaptionVerticalRight\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
                  <span class=\"CaptionBorderBottom\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
                  <span class=\"CaptionEdgeLeftBottom\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                  <span class=\"CaptionEdgeRightBottom\"
                        style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                </div>
              </div>
              <div style=\"top: 15px;\" id=\"SkillTableCollapse\" class=\"BigToggleButton\"
                   onclick=\"CollapseTable('SkillTableCollapseContainer'); \$('#labelshow').html(\$('#labelshow').html() === 'show' ? 'hide' : 'show');\"
                   onmouseover=\"ActivateHelperDiv(\$(this), '', 'Click here to expand the list of skill rates.', '');\"
                   onmouseout=\"\$('#HelperDivContainer').hide();\">
                <div id=\"Indicator_SkillTableCollapseContainer\" class=\"CircleSymbolMinus\"
                     style=\"position: absolute; height: 18px; width: 18px; top: -8px; right: -8px; z-index: 99; cursor: pointer; background-image: url(";
            // line 357
            echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
            echo "templates/tibiacom/images/global/content/circle-symbol-plus.gif);\"></div>
              </div>
              <div class=\"InnerTableContainer\" id=\"SkillTableCollapseContainer\" style=\"display: none; margin: 0;\">
                <table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%\">
                  <tbody>
                  <tr>
                    <td>
                      <table class=\"TableContent\" width=\"100%\">
                        <tbody>
                        <tr>
                          <th>From skill</th>
                          <th>To skill</th>
                          <th>Skill Rate</th>
                        </tr>
                        ";
            // line 371
            $context["i"] = 0;
            // line 372
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["rateStages"] ?? null), "skillsStages", [], "any", false, false, false, 372));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 373
                echo "                          ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 374
                echo "                          <tr bgcolor=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
                echo "\">
                            <td>";
                // line 375
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "minlevel", [], "any", false, false, false, 375), "html", null, true);
                echo "</td>
                            <td>";
                // line 376
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "maxlevel", [], "any", false, false, false, 376))) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "maxlevel", [], "any", false, false, false, 376), "html", null, true);
                    echo " ";
                } else {
                    echo " - ";
                }
                echo "</td>
                            <td>";
                // line 377
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "multiplier", [], "any", false, false, false, 377), "html", null, true);
                echo "x</td>
                          </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 380
            echo "                        </tbody>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </td>
        </tr>
        </tbody>
      </table>

      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" \">
      <tbody>
      <tr>
        <td>
          <div class=\"TableContainer\">
            <div class=\"CaptionContainer\">
              <div class=\"CaptionInnerContainer\">
                <span class=\"CaptionEdgeLeftTop\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                <span class=\"CaptionEdgeRightTop\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                <span class=\"CaptionBorderTop\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
                <span class=\"CaptionVerticalLeft\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
                <div class=\"Text\">
                  <div style=\"height: 16px;\">Rates Magic based on Level:</div>
                </div>
                <span class=\"CaptionVerticalRight\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
                <span class=\"CaptionBorderBottom\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
                <span class=\"CaptionEdgeLeftBottom\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                <span class=\"CaptionEdgeRightBottom\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
              </div>
            </div>
            <div style=\"top: 15px;\" id=\"MagicTableCollapse\" class=\"BigToggleButton\"
                 onclick=\"CollapseTable('MagicTableCollapseContainer'); \$('#labelshow').html(\$('#labelshow').html() === 'show' ? 'hide' : 'show');\"
                 onmouseover=\"ActivateHelperDiv(\$(this), '', 'Click here to expand the list of magic level rates.', '');\"
                 onmouseout=\"\$('#HelperDivContainer').hide();\">
              <div id=\"Indicator_MagicTableCollapseContainer\" class=\"CircleSymbolMinus\"
                   style=\"position: absolute; height: 18px; width: 18px; top: -8px; right: -8px; z-index: 99; cursor: pointer; background-image: url(";
            // line 426
            echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
            echo "templates/tibiacom/images/global/content/circle-symbol-plus.gif);\"></div>
            </div>
            <table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%\">
              <tbody>
              <tr>
                <td>
                  <div class=\"InnerTableContainer\" id=\"MagicTableCollapseContainer\" style=\"display: none; margin: 0;\">
                    <table class=\"TableContent\" width=\"100%\">
                      <tbody>
                      <tr>
                        <th>From magic level</th>
                        <th>To magic level</th>
                        <th>Magic level Rate</th>
                      </tr>
                      ";
            // line 440
            $context["i"] = 0;
            // line 441
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["rateStages"] ?? null), "magicLevelStages", [], "any", false, false, false, 441));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 442
                echo "                        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 443
                echo "                        <tr bgcolor=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
                echo "\">
                          <td>";
                // line 444
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "minlevel", [], "any", false, false, false, 444), "html", null, true);
                echo "</td>
                          <td>";
                // line 445
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "maxlevel", [], "any", false, false, false, 445))) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "maxlevel", [], "any", false, false, false, 445), "html", null, true);
                    echo " ";
                } else {
                    echo " - ";
                }
                echo "</td>
                          <td>";
                // line 446
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "multiplier", [], "any", false, false, false, 446), "html", null, true);
                echo "x</td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 449
            echo "                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </td>
      </tr>
      </tbody>
      </table>
    ";
        }
        // line 462
        echo "  </div>

  <div style=\"width: 100%; padding: 5px 0 10px 10px;\">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
      <tbody>
      <tr>
        <td>
          <div class=\"TableContainer\">
            <div class=\"CaptionContainer\">
              <div class=\"CaptionInnerContainer\">
                <span class=\"CaptionEdgeLeftTop\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                <span class=\"CaptionEdgeRightTop\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                <span class=\"CaptionBorderTop\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
                <span class=\"CaptionVerticalLeft\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
                <div class=\"Text\">
                  <div style=\"height: 16px;\">Frags & Skull system</div>
                </div>
                <span class=\"CaptionVerticalRight\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);\"></span>
                <span class=\"CaptionBorderBottom\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);\"></span>
                <span class=\"CaptionEdgeLeftBottom\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
                <span class=\"CaptionEdgeRightBottom\"
                      style=\"background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);\"></span>
              </div>
            </div>
            <table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
              <tbody>
              <tr>
                <td>
                  <div class=\"InnerTableContainer\">
                    <table style=\"width:100%;\">
                      <tbody>
                      <tr>
                        <td>
                          <div class=\"TableContentContainer\">
                            <table class=\"TableContent\" width=\"100%\">
                              <tbody>
                              <tr bgcolor=\"#D4C0A1\">
                                <td><b>PZ Lock:</b> ";
        // line 506
        echo twig_escape_filter($this->env, (($context["pzLocked"] ?? null) / (60 * 1000)), "html", null, true);
        echo " min</td>
                              </tr>
                              ";
        // line 508
        $context["whiteSkullTime"] = (7 * 60);
        // line 509
        echo "                              ";
        // line 510
        echo "                              ";
        $context["days"] = (int) floor((($context["whiteSkullTime"] ?? null) / (24 * 60)));
        // line 511
        echo "                              ";
        $context["hours"] = (int) floor(((($context["whiteSkullTime"] ?? null) % (24 * 60)) / 60));
        // line 512
        echo "                              ";
        $context["minutes"] = (($context["whiteSkullTime"] ?? null) % 60);
        // line 513
        echo "                              ";
        $context["seconds"] = 0;
        // line 514
        echo "                              <tr bgcolor=\"#F1E0C6\">
                                <td>
                                  <b>Frag Duration:</b>
                                  ";
        // line 517
        if ((($context["days"] ?? null) > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["days"] ?? null), "html", null, true);
            echo " days ";
        }
        // line 518
        echo "                                  ";
        if ((($context["hours"] ?? null) > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["hours"] ?? null), "html", null, true);
            echo " hours ";
        }
        // line 519
        echo "                                  ";
        if ((($context["minutes"] ?? null) > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["minutes"] ?? null), "html", null, true);
            echo " mins ";
        }
        // line 520
        echo "                                  ";
        if ((($context["seconds"] ?? null) > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["seconds"] ?? null), "html", null, true);
            echo " segs ";
        }
        // line 521
        echo "                                </td>
                              </tr>
                              <tr bgcolor=\"#D4C0A1\">
                                <td><b>RedSkull Duration:</b> ";
        // line 524
        echo twig_escape_filter($this->env, ($context["redSkullDuration"] ?? null), "html", null, true);
        echo " days</td>
                              </tr>
                              ";
        // line 526
        if (($context["blackSkullDuration"] ?? null)) {
            // line 527
            echo "                                <tr bgcolor=\"#F1E0C6\">
                                  <td><b>BlackSkull Duration: </b> ";
            // line 528
            echo twig_escape_filter($this->env, ($context["blackSkullDuration"] ?? null), "html", null, true);
            echo " days</td>
                                </tr>
                              ";
        }
        // line 531
        echo "                              ";
        if (array_key_exists("dailyFragsToRedSkull", $context)) {
            // line 532
            echo "                                <tr bgcolor=\"#D4C0A1\">
                                  <td><b>Red skull:</b>
                                    ";
            // line 534
            echo twig_escape_filter($this->env, ($context["dailyFragsToRedSkull"] ?? null), "html", null, true);
            echo " daily /
                                    ";
            // line 535
            echo twig_escape_filter($this->env, ($context["weeklyFragsToRedSkull"] ?? null), "html", null, true);
            echo " weekly /
                                    ";
            // line 536
            echo twig_escape_filter($this->env, ($context["monthlyFragsToRedSkull"] ?? null), "html", null, true);
            echo " monthly
                                  </td>
                                </tr>
                                <tr bgcolor=\"#F1E0C6\">
                                  <td><b>Black skull:</b>
                                    ";
            // line 541
            echo twig_escape_filter($this->env, (($context["dailyFragsToRedSkull"] ?? null) * 2), "html", null, true);
            echo " daily /
                                    ";
            // line 542
            echo twig_escape_filter($this->env, (($context["weeklyFragsToRedSkull"] ?? null) * 2), "html", null, true);
            echo " frags weekly /
                                    ";
            // line 543
            echo twig_escape_filter($this->env, (($context["monthlyFragsToRedSkull"] ?? null) * 2), "html", null, true);
            echo " frags monthly
                                  </td>
                                </tr>
                              ";
        }
        // line 547
        echo "                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<br>
<div style=\"text-align:center\">
  Please report rule violations (Botters, players breaking rules etc) with CTRL + R.
</div>
";
    }

    public function getTemplateName()
    {
        return "serverinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  847 => 547,  840 => 543,  836 => 542,  832 => 541,  824 => 536,  820 => 535,  816 => 534,  812 => 532,  809 => 531,  803 => 528,  800 => 527,  798 => 526,  793 => 524,  788 => 521,  781 => 520,  774 => 519,  767 => 518,  761 => 517,  756 => 514,  753 => 513,  750 => 512,  747 => 511,  744 => 510,  742 => 509,  740 => 508,  735 => 506,  689 => 462,  674 => 449,  665 => 446,  655 => 445,  651 => 444,  646 => 443,  643 => 442,  638 => 441,  636 => 440,  619 => 426,  571 => 380,  562 => 377,  552 => 376,  548 => 375,  543 => 374,  540 => 373,  535 => 372,  533 => 371,  516 => 357,  468 => 311,  459 => 308,  449 => 307,  445 => 306,  440 => 305,  437 => 304,  432 => 303,  430 => 302,  413 => 288,  378 => 255,  355 => 235,  349 => 232,  343 => 229,  300 => 188,  298 => 187,  274 => 165,  268 => 162,  265 => 161,  263 => 160,  259 => 158,  251 => 157,  244 => 152,  240 => 151,  236 => 150,  230 => 147,  224 => 144,  218 => 141,  212 => 138,  204 => 135,  198 => 132,  192 => 129,  184 => 126,  117 => 64,  95 => 45,  91 => 44,  87 => 43,  65 => 24,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "serverinfo.html.twig", "/var/www/html/system/templates/serverinfo.html.twig");
    }
}
