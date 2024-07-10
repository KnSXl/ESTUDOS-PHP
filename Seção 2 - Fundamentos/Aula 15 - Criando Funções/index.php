<?php 
    // Arquivo index responsável pela inicialização do sistema

    require_once 'sistema/configuracao.php';
    include_once 'helpers.php';

    echo saudacao();
    echo '<hr>';
    echo resumirTexto();
?>