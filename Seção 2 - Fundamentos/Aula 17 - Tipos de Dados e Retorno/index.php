<?php
    require './funcoes.php';

    $texto = "texto para resumir";

    // tipos de dados
    $string = "texto";
    $int = 10;
    $float = 9.99;
    $bool = false;
    $nulo = null;

    // informa sobre o tipo da variável
    var_dump($string);
    echo "<hr>";

    echo saudacao();
    echo "<hr>";
    
    echo resumirTexto($texto, 50, "continue");
?>