<?php 
    // Arquivo index responsável pela inicialização do sistema
    // declare(strict_types = 1);
    require_once 'sistema/configuracao.php';
    include_once 'funcoes.php';

    $texto = 'texto para resumir';

    // var_dump($texto);
    echo '<hr>';
    echo saudacao();
    // echo '<hr>';
    // echo resumirTexto($texto, 100, 'continue');
?>