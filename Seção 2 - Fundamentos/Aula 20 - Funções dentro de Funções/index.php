<?php 
    // Arquivo index responsável pela inicialização do sistema
    // declare(strict_types = 1);
    require_once 'sistema/configuracao.php';
    include_once 'funcoes.php';

    $texto = 'texto para resumir';

    /* echo $total = mb_strlen(trim($texto));
    echo '<hr>';

    echo $resumo = mb_substr($texto, 1, 3);
    echo '<hr>';

    echo $ocorrencia = mb_strrpos($texto, 'o');
    echo '<hr>'; */

    // var_dump($texto);
    // echo '<hr>';
    // echo saudacao();
    // echo '<hr>';
    echo resumirTexto($texto, 15);
?>