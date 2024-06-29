<?php
    require './funcoes.php';

    // exemplos de variáveis
    $texto = "texto para resumir vindo de uma variável";

    // dando um novo valor a variável "$texto"
    $texto = "NOVO texto para resumir vindo de uma variável";

    echo saudacao();
    echo "<hr>";

    // Passando a variável "$texto" como argumento para a função "resumirTexto"
    echo resumirTexto($texto, 50);
?>