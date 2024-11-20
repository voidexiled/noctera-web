<?php

/**
 * Automatic Mercadopago payment system gateway.
 *
 * @name      pix-myaac-mercadopago
 * @author    Rafhael Oliveira <rafhaelxd@gmail.com>
 * @website   github.com/underewarrr/
 * @version   2.0.0
 */

 $pointsByDonate = 1; //  coins
 $priceByPoints = 0.10; // Valor por ponto em reais
 $conversionRate = $pointsByDonate / $priceByPoints; 
 $debug = true;
$baseUrl = 'https://www.noctera-global.com/';
$notificationUrl = 'https://www.noctera-global.com/?p=mpnotification';
$noSessionUrl = 'https://wwwnoctera-global.com/?account/manage';
 $donationType = 'coins'; // coins, coins_transferable or premium_points
 $doublePoints = false; // not added yet
 $authorizationToken = 'APP_USR-6273024745334127-112011-950b61e93bafd3593af37efaa18866cd-621055093';

 //Nao mexa em nada aqui pra baixo
$conexao = mysqli_connect(
    configLua('mysqlHost'),
    configLua('mysqlUser'),
    configLua('mysqlPass'),
    configLua('mysqlDatabase')
);


 // Consulta SQL para recuperar os dados do pagador da tabela accounts com base no ID da sessão atual
$query = "SELECT email, rlname, location, country, phone, `key` FROM accounts WHERE id = ?";
$stmt = mysqli_prepare($conexao, $query);

// Verifica se a consulta foi preparada com sucesso
if ($stmt) {
    // Vincula o ID da sessão atual à consulta
    mysqli_stmt_bind_param($stmt, 'i', $current_session);

    // Executa a consulta
    mysqli_stmt_execute($stmt);

    // Associa os resultados da consulta às variáveis correspondentes
    mysqli_stmt_bind_result($stmt, $email, $rlname, $location, $country, $phone, $key);

    // Obtém os resultados da consulta
    mysqli_stmt_fetch($stmt);

    // Fecha a declaração
    mysqli_stmt_close($stmt);
} else {
    // Se houver um erro na preparação da consulta, exibe uma mensagem de erro
    echo 'Erro ao preparar a consulta: ' . mysqli_error($conexao);
}
 
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
?>