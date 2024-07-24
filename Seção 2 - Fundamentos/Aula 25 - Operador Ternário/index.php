<?php 
    // Arquivo index responsável pela inicialização do sistema
    require_once 'sistema/configuracao.php';
    include_once 'funcoes.php';

    echo formatarValor(1000);
    echo '<br>';
    echo formatarNumero(1000);

    // $valor = 5;
    
    /* if ($valor) {
        echo $valor;
    } else {
        echo 0;
    } */

    // echo ($valor ? $valor : 0);
    // ou
    // echo $valor ?: 0;

?>