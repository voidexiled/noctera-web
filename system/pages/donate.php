<link rel="stylesheet" type="text/css" href="../css/mercadopago.css">
<style>
    .BigButton {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto 20;
    }

    .button-container {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin: auto;
        text-align: center;
        /* width: fit-content; */
    }

    .HelperDivIndicator {
        position: relative;
        cursor: help;
        z-index: 1000;
    }
</style>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * Automatic Mercadopago payment system gateway.
 *
 * @name      pix-myaac-mercadopago
 * @author    Rafhael Oliveira <rafhaelxd@gmail.com>
 * @website   github.com/thetibiaking/ttk-myaac-plugins
 * @website   github.com/underewarrr/
 * @version   1.0.0
 */

require_once(SYSTEM . 'functions.php');
require_once(SYSTEM . 'init.php');
require_once(PLUGINS . 'mercadopago/pix/config.php');


if ($config['mercadopago'] !== true) {
    echo "MercadoPago is disabled. If you're an admin please configure this script in config.local.php.";
    return;
}


if (empty($current_session)) {
    if (!$logged) {
        $was_before = $config['friendly_urls'];
        $config['friendly_urls'] = true;

        echo 'To buy coins you need to be logged. ' . generateLink(getLink('?subtopic=accountmanagement') . '&redirect=' . urlencode(BASE_URL . '?donate'), 'Login') . ' first to make a donate.';

        $config['friendly_urls'] = $was_before;
        return;
    }
}

?>

<div class="CustomerIdentification">
    Order for:
    <span id="DisplayEMail"></span>
    <div>
        <img id="ButtonEMail" src="../images/global/general/show.gif" style="cursor: pointer; margin: 10 0 20 0;">
    </div>
</div>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os dados foram enviados via POST
    // Caminho relativo para o arquivo config.php

    $quantidadeSelecionada = (int)$_POST['quantidade'];
    $totalValue = $quantidadeSelecionada * $priceByPoints;
    $pontosGanhos = $quantidadeSelecionada * $pointsByDonate;
    setcookie("totalValue", $totalValue, time() + 3600); // 1 hora de validade
    setcookie("pontosGanhos", $pontosGanhos, time() + 3600); // 1 hora de validade


    $t = 301;
    $curl = curl_init();
    $dados["transaction_amount"] = $totalValue;
    $dados["description"] = $_POST['description'] ?: 'Value and Coins';
    $dados["external_reference"] = "Quantidade Tibia Coins $pontosGanhos | Valor pago R$$totalValue";
    $dados["payment_method_id"] = "pix";
    $dados["notification_url"] = $notificationUrl;
    $dados["payer"]["email"] = $_POST['email_cob'];
    $dados["payer"]["first_name"] = $config['lua']['serverName'] . ' -';
    $dados["payer"]["last_name"] = $_POST['description'];
    $dados["payer"]["address"]["zip_code"] = "";
    $dados["payer"]["address"]["street_name"] = $location;
    $dados["payer"]["address"]["street_number"] = "";
    $dados["payer"]["address"]["neighborhood"] = $country;
    $dados["payer"]["address"]["city"] = $country;
    $dados["payer"]["address"]["federal_unit"] = $country;

    $randomKey = md5(uniqid(rand(), true));
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.mercadopago.com/v1/payments',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($dados),
        CURLOPT_HTTPHEADER => array(
            'accept: application/json',
            'content-type: application/json',
            'X-Idempotency-Key: ' . $randomKey,
            'Authorization: Bearer ' . $authorizationToken,
        ),
    ));
    $response = curl_exec($curl);
    echo $dados;
    echo $response;
    $resultado = json_decode($response);
    echo $config['mercadopago'];
    $collector_id = isset($resultado->id) ? $resultado->id : null;
    echo '<br>';
    echo $collector_id;
    curl_close($curl);

    // Display full response for debugging if debug is enabled
    if ($debug) {
        echo '<pre>';
        var_dump($resultado);
        echo '</pre>';
    }

    // Check if collector_id is present
    if (!$collector_id) {
        echo '<p>Error: Collector ID not found in the response.</p>';
        exit;
    }

    //echo 'Collector ID: ' . $collector_id;



    // Verifica se a resposta foi bem-sucedida antes de exibir o QR Code
    if ($resultado->status === 'pending') {
        // Exibe o QR Code e o código apenas se o debug estiver desativado
        if (!$debug) {
?>
            <div class="TableContainer">
                <div class="CaptionContainer">
                    <div class="CaptionInnerContainer">
                        <span class="CaptionEdgeLeftTop" style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-edge.gif);"></span>
                        <span class="CaptionEdgeRightTop" style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-edge.gif);"></span>
                        <span class="CaptionBorderTop" style="background-image:url(<?= $template_path; ?>/images/global/content/table-headline-border.gif);"></span>
                        <span class="CaptionVerticalLeft" style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
                        <div class="Text">

                            Sumario

                        </div>
                        <span class="CaptionVerticalRight" style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
                        <span class="CaptionBorderBottom" style="background-image:url(<?= $template_path; ?>/images/global/content/table-headline-border.gif);"></span>
                        <span class="CaptionEdgeLeftBottom" style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-edge.gif);"></span>
                        <span class="CaptionEdgeRightBottom" style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-edge.gif);"></span>
                    </div>
                </div>
                <table class="Table5" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td>
                                <div class="InnerTableContainer">
                                    <table style="width:100%;">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="TableContentContainer" style="margin-bottom: 20px;">
                                                        <table class="TableContent" width="100%" style="margin-bottom: 20px; border:1px solid #faf0d7;">
                                                            <tbody>
                                                                <tr>
                                                                    <div id="NavigationContainer">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="vertical-align: middle;" class="LabelV200 ">
                                                                        <span>
                                                                            <h2> Confirme os dados da transação </h2>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;" class="LabelV200 ">Account Nome:</td>
                                                                    <td><input type="text" name="[AccountNome]" value="<?= $account_logged->getName(); ?>" disabled="disabled" required="required">
                                                                        <span style="margin-left: 5px; position: absolute; margin-top: 2px;">
                                                                            <span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), 'Information:', 'Conta que ira receber os pontos.', '');" onmouseout="$('#HelperDivContainer').hide();">
                                                                                <img style="border:0px;" src="https://static.tibia.com/images/global/content/info.gif">
                                                                            </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;" class="LabelV200 ">E-Mail:</td>
                                                                    <td><input type="text" name="[EMailAddress]" value="<?= $email ?>" disabled="disabled" required="required">
                                                                        <span style="margin-left: 5px; position: absolute; margin-top: 2px;">
                                                                            <span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), 'Information:', 'Email cadastrado na conta.', '');" onmouseout="$('#HelperDivContainer').hide();">
                                                                                <img style="border:0px;" src="https://static.tibia.com/images/global/content/info.gif">
                                                                            </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;" class="LabelV200 ">Valor:</td>
                                                                    <td>
                                                                        <input type="text" name="[Valor]" value="R$ <?= $totalValue ?>" disabled="disabled" required="required"><input type="hidden" name="[Valor]" value="Valor">
                                                                        <span style="margin-left: 5px; position: absolute; margin-top: 2px;">
                                                                            <span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), 'Information:', 'Valor em R$ da doação efetuada.', '');" onmouseout="$('#HelperDivContainer').hide();">
                                                                                <img style="border:0px;" src="https://static.tibia.com/images/global/content/info.gif">
                                                                            </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;" class="LabelV200 ">Total de Pontos:</td>
                                                                    <td><input type="text" name="[Totaldepontos]" value="<?= $pontosGanhos ?>" disabled="disabled" required="required">
                                                                        <span style="margin-left: 5px; position: absolute; margin-top: 2px;">
                                                                            <span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), 'Information:', 'Total de pontos a ser recebido na conta.', '');" onmouseout="$('#HelperDivContainer').hide();">
                                                                                <img style="border:0px;" src="https://static.tibia.com/images/global/content/info.gif">
                                                                            </span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                    </div>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="button-container">
                <div class="BigButton" style="background-image:url(../templates/tibiacom/images/global/buttons/sbutton_green.gif)">
                    <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                        <div class="BigButtonOver" style="background-image: url('../templates/tibiacom/images/global/buttons/sbutton_green_over.gif'); visibility: hidden;">
                        </div>
                        <button class="BigButtonText" type="button" onclick="window.location.href='/?p=mpnotification&id=<?php echo $collector_id; ?>'">Avançar</button>
                    </div>
                </div>
                <div class="BigButton" style="background-image:url(../templates/tibiacom/images/global/buttons/sbutton_red.gif)">
                    <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                        <div class="BigButtonOver" style="background-image: url('../templates/tibiacom/images/global/buttons/sbutton_red_over.gif'); visibility: hidden;">
                        </div>
                        <button class="BigButtonText" type="button" onclick="window.location.href='/?donate'">Voltar</button>

                    </div>
                </div>

            </div>
            </td>
            </tr>
            </tbody>
            </table>
            </div>


    <?php
        }

        // Ação no banco de dados (se necessário)
        $current_session = getSession('account');

        $sql = "INSERT INTO status(status, codigo, account, points, chave) VALUES(?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);

        // Check if the statement was prepared successfully
        if ($stmt) {
            // Assuming $current_session and $pontosGanhos are defined elsewhere in your code
            // Bind parameters with data types
            $chave = ""; // Defina um valor para o campo 'chave' ou substitua por NULL se permitir valores nulos
            mysqli_stmt_bind_param($stmt, "sssis", $resultado->status, $collector_id, $current_session, $pontosGanhos, $chave);

            // Execute the statement
            mysqli_stmt_execute($stmt);

            // echo '<META HTTP-EQUIV="REFRESH" CONTENT="10; URL=https://underfox.servegame.com/?p=mpnotification&id=' . $collector_id . '&debug=' . ($debug ? 'true' : 'false') . '\'">';

            // Check for successful execution
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                //echo "Record inserted successfully";
            } else {
                echo "Error inserting record";
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($conexao);
        }
    } else {
        echo '<p>Erro ao processar o pagamento. Tente novamente.</p>';

        // Display error message, if available
        if (isset($resultado->message)) {
            echo '<p>Error Message: ' . $resultado->message . '</p>';
        }

        // Display status for further analysis
        echo '<p>Status: ' . $resultado->status . '</p>';
    }
} else {

    ?>
    <div class="TableContainer">
        <div class="CaptionContainer">
            <div class="CaptionInnerContainer">
                <span class="CaptionEdgeLeftTop" style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-edge.gif);"></span>
                <span class="CaptionEdgeRightTop" style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-edge.gif);"></span>
                <span class="CaptionBorderTop" style="background-image:url(<?= $template_path; ?>/images/global/content/table-headline-border.gif);"></span>
                <span class="CaptionVerticalLeft" style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
                <div class="Text">Donate</div>
                <span class="CaptionVerticalRight" style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
                <span class="CaptionBorderBottom" style="background-image:url(<?= $template_path; ?>/images/global/content/table-headline-border.gif);"></span>
                <span class="CaptionEdgeLeftBottom" style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-edge.gif);"></span>
                <span class="CaptionEdgeRightBottom" style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-edge.gif);"></span>
            </div>
        </div>
        <table class="Table5" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td>
                        <div class="InnerTableContainer">
                            <form method="POST" id="donationForm">
                                <table style="width:100%;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="TableContentContainer">
                                                    <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                        <tbody>
                                                            <tr>
                                                                <div id="NavigationContainer">
                                                                    <div class="formdonate">
                                                                        <ul class="donation-options">
                                                                            <div class="donation-option">
                                                                                <li>
                                                                                    <input type="radio" id="donation-1" name="quantidade" value="10" required>
                                                                                    <label for="donation-1">
                                                                                        <div class="serviceid"><img src="../images/payment/serviceid_133.png">
                                                                                        </div>
                                                                                        <div class="tcqtn">10 Tibia Coins
                                                                                        </div>
                                                                                        <div class="tcprice">1 BRL*</div>
                                                                                    </label>
                                                                                </li>
                                                                            </div>
                                                                            <div class="donation-option">
                                                                                <li>
                                                                                    <input type="radio" id="donation-2" name="quantidade" value="50" required>
                                                                                    <label for="donation-2">
                                                                                        <div class="serviceid"><img src="../images/payment/serviceid_134.png">
                                                                                        </div>
                                                                                        <div class="tcqtn">50 Tibia Coins
                                                                                        </div>
                                                                                        <div class="tcprice">5 BRL*</div>
                                                                                    </label>
                                                                                </li>
                                                                            </div>
                                                                            <div class="donation-option">
                                                                                <li>
                                                                                    <input type="radio" id="donation-3" name="quantidade" value="100" required>
                                                                                    <label for="donation-3">
                                                                                        <div class="serviceid"><img src="../images/payment/serviceid_135.png">
                                                                                        </div>
                                                                                        <div class="tcqtn">100 Tibia Coins
                                                                                        </div>
                                                                                        <div class="tcprice">10 BRL*</div>
                                                                                    </label>
                                                                                </li>
                                                                            </div>
                                                                            <div class="donation-option">
                                                                                <li>
                                                                                    <input type="radio" id="donation-4" name="quantidade" value="200" required>
                                                                                    <label for="donation-4">
                                                                                        <div class="serviceid"><img src="../images/payment/serviceid_136.png">
                                                                                        </div>
                                                                                        <div class="tcqtn">200 Tibia Coins
                                                                                        </div>
                                                                                        <div class="tcprice">20 BRL*</div>
                                                                                    </label>
                                                                                </li>
                                                                            </div>
                                                                            <div class="donation-option">
                                                                                <li>
                                                                                    <input type="radio" id="donation-5" name="quantidade" value="500" required>
                                                                                    <label for="donation-5">
                                                                                        <div class="serviceid"><img src="../images/payment/serviceid_137.png">
                                                                                        </div>
                                                                                        <div class="tcqtn">500 Tibia Coins
                                                                                        </div>
                                                                                        <div class="tcprice">50 BRL*</div>
                                                                                    </label>
                                                                                </li>
                                                                            </div>
                                                                            <div class="donation-option">
                                                                                <li>
                                                                                    <input type="radio" id="donation-6" name="quantidade" value="1000" required>
                                                                                    <label for="donation-6">
                                                                                        <div class="serviceid"><img src="../images/payment/serviceid_138.png">
                                                                                        </div>
                                                                                        <div class="tcqtn">1000 Tibia Coins
                                                                                        </div>
                                                                                        <div class="tcprice">100 BRL*</div>
                                                                                    </label>
                                                                                </li>
                                                                            </div>
                                                                        </ul>
                                                                        <input type="hidden" name="chave" value="null">
                                                                    </div>
                                                                </div>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="TableContentContainer">
                                                    <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                        <tbody>
                                                            <tr>
                                                                <div id="NavigationContainer">
                                                                    <div id="NavigationContainer">
                                                                        <div class="formpayment">
                                                                            <ul class="payment-options">
                                                                                <div class="payment-option">
                                                                                    <li>
                                                                                        <input type="radio" id="payment-1" name="pagamento" value="Pix" required>
                                                                                        <label for="payment-1">
                                                                                            <div class="paymentid"><img src="images/payment/paymentmethodcategory145.gif">
                                                                                            </div>
                                                                                            <div class="paymenttcqtn">PIX
                                                                                            </div>
                                                                                            <div class="paymenttcprice">Usual Process Time:<br>very fast</div>
                                                                                        </label>
                                                                                    </li>
                                                                                </div>
                                                                            </ul>
                                                                            <input type="hidden" name="chave" value="null">
                                                                        </div>
                                                                        <div class="button-container">
                                                                            <div class="BigButton" style="background-image:url(../templates/tibiacom/images/global/buttons/sbutton_green.gif)">
                                                                                <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                                                                                    <div class="BigButtonOver" style="background-image: url(&quot;../templates/tibiacom/images/global/buttons/sbutton_green_over.gif&quot;); visibility: hidden;">
                                                                                    </div>
                                                                                    <input class="BigButtonText" type="submit" value="Avançar">
                                                                                </div>
                                                                            </div>
                                                                            <div class="BigButton" style="background-image:url(../templates/tibiacom/images/global/buttons/sbutton_red.gif)">
                                                                                <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                                                                                    <div class="BigButtonOver" style="background-image: url('../templates/tibiacom/images/global/buttons/sbutton_red_over.gif'); visibility: hidden;">
                                                                                    </div>
                                                                                   
                                                                                    <button class="BigButtonText" type="button" onclick="window.location.href='/'">Cancelar</button>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="display:none;">
                                            <td>
                                                <label for="description">Descrição:</label>
                                            </td>
                                            <td>
                                                <input type="text" name="description" id="description" value="Account ID: <?= $account_logged->getId() ?> | Account Nome: <?= $account_logged->getName(); ?>">
                                            </td>
                                        </tr>
                                        <tr style="display:none;">
                                            <td>
                                                <label for="name">Nome:</label>
                                            </td>
                                            <td>
                                                <input type="text" name="first_name" id="first_name" value="<?= $rlname; ?>">
                                            </td>
                                        </tr>
                                        <tr style="display:none;">
                                            <td>
                                                <label for="email_cob">Email:</label>
                                            </td>
                                            <td>
                                                <input type="email" name="email_cob" id="email_cob" value="<?= $email; ?>">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

<?php
}
?>

<script>
    // function startCountdown(duration, display) {
    //     var timer = duration,
    //         minutes, seconds;
    //     setInterval(function() {
    //         minutes = parseInt(timer / 60, 10);
    //         seconds = parseInt(timer % 60, 10);

    //         minutes = minutes < 10 ? "0" + minutes : minutes;
    //         seconds = seconds < 10 ? "0" + seconds : seconds;

    //         display.textContent = minutes + ":" + seconds;

    //         if (--timer < 0) {
    //             timer = duration;
    //         }
    //     }, 1000);
    // }

    // window.onload = function() {
    //     var oneMinutes = 60,
    //         display = document.querySelector('#time');
    //     startCountdown(oneMinutes, display);
    // };

    function maskEmail(email) {
    let [user, domain] = email.split('@');
    let maskedUser = user[0] + '*'.repeat(user.length - 1);
    return maskedUser + '@' + domain;
}

document.addEventListener('DOMContentLoaded', () => {
    const email = '<?php echo $account_logged->getEmail(); ?>';
    const maskedEmail = maskEmail(email);

    // Atualizando os elementos do DOM
    const displayEmailElement = document.getElementById('DisplayEMail');
    const maskedEmailElement = document.getElementById('MaskedEMail');
    const readableEmailElement = document.getElementById('ReadableEMail');
    const buttonEmail = document.getElementById('ButtonEMail');

    if (displayEmailElement) {
        displayEmailElement.innerText = maskedEmail;
    }
    if (maskedEmailElement) {
        maskedEmailElement.innerText = maskedEmail;
    }
    if (readableEmailElement) {
        readableEmailElement.innerText = email;
    }

    if (buttonEmail) {
        buttonEmail.addEventListener('click', () => {
            if (displayEmailElement.innerText === maskedEmail) {
                displayEmailElement.innerText = email;
                buttonEmail.src = '../images/global/general/hide.gif';
            } else {
                displayEmailElement.innerText = maskedEmail;
                buttonEmail.src = '../images/global/general/show.gif';
            }
        });
    }
});



    let currentStep = 1;

    function advanceStep() {
        if (currentStep < 4) {
            const steps = document.querySelectorAll('.Steps');
            const tubes = document.querySelectorAll('.TubeContainer .Tube');

            // Update current step
            const currentStepElement = steps[currentStep - 1];
            const currentIcon = currentStepElement.querySelector('.StepIcon');
            currentIcon.src = currentIcon.src.replace('blue', 'green');
            currentStepElement.querySelector('.StepText').style.fontWeight = 'bold';

            // Update tube to green
            if (currentStep > 1) {
                tubes[currentStep - 2].src = tubes[currentStep - 2].src.replace('blue', 'green');
            }
            if (currentStep < 3) {
                tubes[currentStep - 1].src = tubes[currentStep - 1].src.replace('blue', 'green-blue');
            }

            // Update next step to green
            if (currentStep < 3) {
                const nextStepElement = steps[currentStep];
                const nextIcon = nextStepElement.querySelector('.StepIcon');
                nextIcon.src = nextIcon.src.replace('blue', 'green');
            }

            currentStep++;
        }
    }


    function ActivateHelperDivs(a_Object, a_Title, a_Text) {
        // Define o novo conteúdo do tooltip
        $('#HelperDivHeadline').html(a_Title);
        $('#HelperDivText').html(a_Text);

        // Função para atualizar a posição do tooltip
        function updateTooltipPosition() {
            var l_Left = a_Object.offset().left + a_Object.outerWidth(); // Lado direito do botão
            var l_Top = a_Object.offset().top + a_Object.outerHeight(); // Parte inferior do botão
            var l_ToolTipWidth = $('#HelperDivContainer').outerWidth(true);
            var l_ToolTipHeight = $('#HelperDivContainer').outerHeight(true);

            // Ajusta a posição vertical se o tooltip não couber na janela do navegador
            var l_WindowHeight = $(window).height();
            var l_ScrollTop = $(document).scrollTop();

            if ((l_Top + l_ToolTipHeight) > (l_WindowHeight + l_ScrollTop)) {
                l_Top = l_Top - (l_ToolTipHeight + a_Object.outerHeight()); // Ajusta para o topo da janela
            }

            // Define a posição do tooltip
            $('#HelperDivContainer').css({
                'top': (l_Top - 13) + 'px', // Adiciona um pequeno deslocamento para baixo
                'left': (l_Left + 1) + 'px', // Adiciona um pequeno deslocamento para a direita
                'z-index': 10000 // Garante que o tooltip apareça acima de qualquer outro elemento
            }).show();
        }

        // Adiciona os eventos apenas ao botão específico
        a_Object.on('mouseenter', updateTooltipPosition);
        a_Object.on('mouseleave', function() {
            $('#HelperDivContainer').hide();
        });
    }
</script>

<style>
    #HelperDivContainer {
        position: absolute;
        z-index: 10000;
        /* Garante que o tooltip apareça acima de qualquer outro elemento */
        display: none;
        /* Inicialmente oculto */
        /* Adicione outros estilos como background, padding, etc. */
    }
</style>