<link rel="stylesheet" href="../css/mpnotification.css">

<?php

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

// Set debug mode based on the query parameter // use debug true in url to get more infos
$debug = isset($_REQUEST['debug']) && $_REQUEST['debug'] === 'true';

// Verify if the collector_id is present in the request
if (isset($_REQUEST['id'])) {
    $collector_id = $_REQUEST['id'];

    // Initialize cURL
    $curl = curl_init();

    // Set cURL options
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.mercadopago.com/v1/payments/' . $collector_id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'accept: application/json',
            'content-type: application/json',
            'Authorization: Bearer ' . $authorizationToken,
        ),
    ));

    // Execute cURL request
    $response = curl_exec($curl);

    // Check if cURL request was successful
    if ($response === false) {
        // Handle cURL error
        echo 'Error fetching payment details from Mercado Pago API.';
        if ($debug) {
            echo '<br>Debug Mode: ON';
            echo '<br>Status from Mercado Pago API: ' . $resultado->status;
            echo 'Total Paid Amount or Transaction Amount: ' . $resultado->transaction_amount * $conversionRate;
            echo '<br>Status from Mercado Pago API: <pre>' . print_r($resultado, true) . '</pre>';
            echo '<br>CURL Error: ' . curl_error($curl);
        }
    } else {
        // Decode the JSON response
        $resultado = json_decode($response);

        // Check if the payment status is 'approved' or 'paid'
        // Check if the payment status is approved or paid
        // Check if the payment status is approved or paid
        if ($resultado->status === 'approved' || $resultado->status === 'paid') {
            // Check if the payment has already been processed
            $check_processed = "SELECT processed FROM status WHERE codigo = ?";
            $stmt_check = mysqli_prepare($conexao, $check_processed);
            mysqli_stmt_bind_param($stmt_check, "i", $collector_id);
            mysqli_stmt_execute($stmt_check);
            mysqli_stmt_bind_result($stmt_check, $processed);
            mysqli_stmt_fetch($stmt_check);
            mysqli_stmt_close($stmt_check);

            if ($processed === 0 || $processed === null) { // Payment not processed yet
                // Mark the payment as processed
                $update_processed = "UPDATE status SET processed = 1 WHERE codigo = ?";
                $stmt_processed = mysqli_prepare($conexao, $update_processed);
                mysqli_stmt_bind_param($stmt_processed, "i", $collector_id);
                mysqli_stmt_execute($stmt_processed);
                mysqli_stmt_close($stmt_processed);
                $new_status_value = 'delivered';
                // Here's the additional update query for the status column in the status table
                $update_status = "UPDATE status SET status = ? WHERE codigo = ?";
                $stmt_status = mysqli_prepare($conexao, $update_status);
                mysqli_stmt_bind_param($stmt_status, "si", $new_status_value, $collector_id); // Replace $new_status_value with the appropriate value
                mysqli_stmt_execute($stmt_status);
                mysqli_stmt_close($stmt_status);

                // Calculate premium points based on total_paid_amount and conversion rate
                $conversionValue = $resultado->transaction_amount * $conversionRate;

                // Get the current session account
                $current_session = getSession('account');

                // Update the accounts table with premium points using prepared statement
                $update_accounts = "UPDATE accounts SET $donationType = $donationType + ? WHERE id = ?";
                $stmt_accounts = mysqli_prepare($conexao, $update_accounts);

                // Check if the statement for accounts table was prepared successfully
                if ($stmt_accounts) {
                    // Bind parameters with data types for accounts table
                    mysqli_stmt_bind_param($stmt_accounts, "di", $conversionValue, $current_session);

                    // Execute the statement for accounts table
                    mysqli_stmt_execute($stmt_accounts);

                    // Check for successful execution for accounts table
                    if (mysqli_stmt_affected_rows($stmt_accounts) > 0) {
?>
                        <table border="0" width="100%">
                            <tbody>
                                <tr>
                                    <td style="padding: 0px 5px 10px 0px; ">
                                        <div class="TableContainer">
                                            <div class="CaptionContainer">
                                                <div class="CaptionInnerContainer">
                                                    <span class="CaptionEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                                    <span class="CaptionEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                                    <span class="CaptionBorderTop" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                                    <span class="CaptionVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                                    <div class="Text" style="display: flex; justify-content: space-between;">
                                                        <span>Pagamento Confirmado</span>
                                                        <span>ID: <?= $collector_id ?></span>
                                                    </div>
                                                    <span class="CaptionVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                                    <span class="CaptionBorderBottom" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                                    <span class="CaptionEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                                    <span class="CaptionEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                                </div>
                                            </div>
                                            <table class="Table1" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="InnerTableContainer">
                                                                <table style="width: 100%" style="text-align: left;">
                                                                    <?php
                                                                    // Recupere o valor total do cookie
                                                                    if (isset($_COOKIE['totalValue'])) {
                                                                        $totalValue = $_COOKIE['totalValue'];
                                                                        echo "Pix gerado com sucesso no valor de R$" . htmlspecialchars($totalValue);
                                                                    } else {
                                                                        echo "Nenhum valor total encontrado.";
                                                                    }
                                                                    ?>
                                                                    </br>
                                                                    <?php
                                                                    // Recupere o valor total do cookie
                                                                    if (isset($_COOKIE['pontosGanhos'])) {
                                                                        $pontosGanhos = $_COOKIE['pontosGanhos'];
                                                                        echo 'Equivalente a ' . htmlspecialchars($pontosGanhos) . ' Tibia Coins';
                                                                    } else {
                                                                        echo "Nenhum valor total encontrado.";
                                                                    }
                                                                    ?>
                                                                    </br>
                                                                    <span>Status: <span class="status-approved">Pontos adicionados com sucesso na sua conta</span></span>
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

                <?php

                    } else {
                        echo "Error updating premium points in accounts table";
                    }

                    // Close the statement for accounts table
                    mysqli_stmt_close($stmt_accounts);
                } else {
                    echo "Error preparing statement for accounts table: " . mysqli_error($conexao);
                }
            } else {

                ?>

                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td style="padding: 0px 5px 10px 0px; ">
                                <div class="TableContainer">
                                    <div class="CaptionContainer">
                                        <div class="CaptionInnerContainer">
                                            <span class="CaptionEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                            <span class="CaptionEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                            <span class="CaptionBorderTop" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                            <span class="CaptionVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                            <div class="Text" style="display: flex; justify-content: space-between;">
                                                <span>Pagamento Confirmado</span>
                                                <span>ID: <?= $collector_id ?></span>
                                            </div>
                                            <span class="CaptionVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                            <span class="CaptionBorderBottom" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                            <span class="CaptionEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                            <span class="CaptionEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                        </div>
                                    </div>
                                    <table class="Table1" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="InnerTableContainer">
                                                        <table style="width: 100%" style="text-align: left;">

                                                            <?php
                                                            // Recupere o valor total do cookie
                                                            if (isset($_COOKIE['totalValue'])) {
                                                                $totalValue = $_COOKIE['totalValue'];
                                                                echo "Pix gerado com sucesso no valor de R$" . htmlspecialchars($totalValue);
                                                            } else {
                                                                echo "Nenhum valor total encontrado.";
                                                            }
                                                            ?>
                                                            </br>
                                                            <?php
                                                            // Recupere o valor total do cookie
                                                            if (isset($_COOKIE['pontosGanhos'])) {
                                                                $pontosGanhos = $_COOKIE['pontosGanhos'];
                                                                echo 'Equivalente a ' . htmlspecialchars($pontosGanhos) . ' Tibia Coins';
                                                            } else {
                                                                echo "Nenhum valor total encontrado.";
                                                            }
                                                            ?>
                                                            </br>
                                                            <span>Status: <span class="status-approved">Esse pagamento ja foi processado.</span></span>
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
                <div class="button-container">
                <div class="BigButton" style="background-image:url(../templates/tibiacom/images/global/buttons/sbutton_green.gif)">
                    <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                        <div class="BigButtonOver" style="background-image: url('../templates/tibiacom/images/global/buttons/button_green_over.gif'); visibility: hidden;">
                        </div>
                        <button class="BigButtonText" type="button" onclick="window.location.href='/?account/manage'">Sair</button>
                    </div>
                </div>
            </div>

            <?php

            }
        } else {

            ?>
            <meta http-equiv="refresh" content="10"> <!-- Adiciona atualização automática a cada 3 segundos -->
            <table border="0" width="100%">
                <tbody>
                    <tr>
                        <td style="padding: 0px 5px 10px 0px; ">
                            <div class="TableContainer">
                                <div class="CaptionContainer">
                                    <div class="CaptionInnerContainer">
                                        <span class="CaptionEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                        <span class="CaptionEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                        <span class="CaptionBorderTop" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                        <span class="CaptionVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                        <div class="Text" style="display: flex; justify-content: space-between;">
                                            <span>Pagamento Pendente</span>
                                            <span>ID: <?= $collector_id ?></span>
                                        </div>
                                        <span class="CaptionVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                        <span class="CaptionBorderBottom" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                        <span class="CaptionEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                        <span class="CaptionEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                    </div>
                                </div>
                                <table class="Table1" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="InnerTableContainer">
                                                    <table style="width: 100%" style="text-align: left;">
                                                        <?php
                                                        // Recupere o valor total do cookie
                                                        if (isset($_COOKIE['totalValue'])) {
                                                            $totalValue = $_COOKIE['totalValue'];
                                                            echo "Pix gerado com sucesso no valor de R$" . htmlspecialchars($totalValue);
                                                        } else {
                                                            echo "Nenhum valor total encontrado.";
                                                        }
                                                        ?>
                                                        </br>
                                                        <?php
                                                        // Recupere o valor total do cookie
                                                        if (isset($_COOKIE['pontosGanhos'])) {
                                                            $pontosGanhos = $_COOKIE['pontosGanhos'];
                                                            echo 'Equivalente a ' . htmlspecialchars($pontosGanhos) . ' Tibia Coins';
                                                        } else {
                                                            echo "Nenhum valor total encontrado.";
                                                        }
                                                        ?>
                                                        </br>
                                                        <span>Pagando o QRCode, o Tibia Coins será depositado automaticamente em sua conta.</span></br>
                                                        <span>Status: <span class="status-pending">Pendente</span></span>
                                                        <div class="status-rejected">Atenção, não feche a página até concluir o processo de pagamento !</div>
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




            <table border="0" width="100%">
                <tbody>
                    <tr>
                        <td width="30" style="padding: 0px 5px 10px 0px; ">
                            <div class="TableContainer">
                                <div class="CaptionContainer">
                                    <div class="CaptionInnerContainer">
                                        <span class="CaptionEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                        <span class="CaptionEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                        <span class="CaptionBorderTop" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                        <span class="CaptionVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                        <div class="Text" style="display: flex; justify-content: space-between;">
                                            <span>QRCode</span>
                                            <span>ID: <?= $collector_id ?></span>
                                        </div>
                                        <span class="CaptionVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                        <span class="CaptionBorderBottom" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                        <span class="CaptionEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                        <span class="CaptionEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                    </div>
                                </div>
                                <table class="Table1" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="InnerTableContainer">
                                                    <table style="width: 100%">
                                                        <img style="width:250;height:250;" id="base64image" src="data:image/jpeg;base64, <?= $resultado->point_of_interaction->transaction_data->qr_code_base64 ?>" />
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                        <td width="70%" style="padding: 0px 0px 10px 5px; vertical-align: top;">
                            <div class="TableContainer">
                                <div class="CaptionContainer">
                                    <div class="CaptionInnerContainer">
                                        <span class="CaptionEdgeLeftTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                        <span class="CaptionEdgeRightTop" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                        <span class="CaptionBorderTop" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                        <span class="CaptionVerticalLeft" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                        <div class="Text" style="display: flex; justify-content: space-between;">
                                            <span>Copia e Cola</span>
                                            <span>ID: <?= $collector_id ?></span>
                                        </div>
                                        <span class="CaptionVerticalRight" style="background-image:url(templates/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
                                        <span class="CaptionBorderBottom" style="background-image:url(templates/tibiacom/images/global/content/table-headline-border.gif);"></span>
                                        <span class="CaptionEdgeLeftBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                        <span class="CaptionEdgeRightBottom" style="background-image:url(templates/tibiacom/images/global/content/box-frame-edge.gif);"></span>
                                    </div>
                                </div>

                                <table class="Table1" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="InnerTableContainer">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div id="pixCode" style="width: 100%; word-break: break-word; text-align: center; align-items: center; font-weight: bold;">
                                                                        <?= $resultado->point_of_interaction->transaction_data->qr_code ?>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <center>
                                                                        <div class="BigButton" style="background-image:url(../templates/tibiacom/images/global/buttons/sbutton_green.gif)">
                                                                            <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                                                                                <div class="BigButtonOver" style="background-image: url(&quot;../templates/tibiacom/images/global/buttons/button_green_over.gif&quot;); visibility: hidden;">
                                                                                </div>
                                                                                <input onclick="copyToClipboard()" id="btn" class="BigButtonText" type="button" value="Copiar QRCode">
                                                                            </div>
                                                                        </div>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                            <div id="copyMessage" class="copy-message">Código PIX Copiado!</div>
                                                            <div id="pendingMessage" class="pending-message">Atenção, não feche a página até concluir o processo de pagamento !</div>
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
<?php
        }


        if ($debug) {

            echo '<br>Debug Mode: ON';
            echo '<br>Status from Mercado Pago API: ' . $resultado->status;
            echo 'Total Paid Amount or Transaction Amount: ' . $resultado->transaction_amount * $conversionRate;
            echo '<br>Status from Mercado Pago API: <pre>' . print_r($resultado, true) . '</pre>';
            echo '<br>CURL Error: ' . curl_error($curl);
        }
    }

    // Close cURL
    curl_close($curl);
} else {
    echo 'Invalid or missing collector_id in the request.';
    if ($debug) {
        echo '<br>Debug Mode: ON';
        // Add more debug information as needed
    }
}
?>


<script>
    function copyQRCode() {
        var qrCodeElement = document.getElementById("qrCodeResult");
        var textArea = document.createElement("textarea");
        textArea.value = qrCodeElement.textContent;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("copy");
        document.body.removeChild(textArea);
        alert("QRCode copiado!");
    }

    function copyToClipboard() {
        var copyText = document.getElementById("pixCode");
        var tempInput = document.createElement("input");
        tempInput.value = copyText.innerText;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        var copyMessage = document.getElementById("copyMessage");
        if (copyMessage) { // Verifica se o elemento existe
            copyMessage.classList.add("fade-in");

            setTimeout(function() {
                copyMessage.classList.remove("fade-in");
            }, 2000);
        }
    }

    function showPendingMessage() {
       var pendingMessage = document.getElementById("pendingMessage");
       if (pendingMessage) {
           pendingMessage.classList.add("fade-in");

           setTimeout(function() {
               pendingMessage.classList.remove("fade-in");
           }, 2000); // Tempo que a mensagem ficará visível (2 segundos)
       }
   }

   $(document).ready(function() {
    showPendingMessage();
    setInterval(showPendingMessage, 4000); // Atualiza a cada 10 segundos
  });

  
</script>