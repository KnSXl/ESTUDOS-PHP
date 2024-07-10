<?php 
    // Arquivo index responsável pela inicialização do sistema

    require_once 'sistema/configuracao.php';
    include_once 'helpers.php';

    $texto = 'texto para resumir vindo de uma variavel';
    $texto = 'xxx';

    echo saudacao();
    echo '<hr>';
    echo resumirTexto($texto, 50, 'continue');
?>