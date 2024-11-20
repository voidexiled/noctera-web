<?php

defined('MYAAC') or die('Direct access not allowed!');

// Verifica se a tabela status existe
if(!tableExist('status')) {
    // Se não existir, importa o schema
    try {
        $db->query(file_get_contents(PLUGINS . 'mercadopago/status.sql'));
        success('Imported status table to database.');
    } catch(PDOException $error_) {
        error($error_);
        return;
    }
}

?>
