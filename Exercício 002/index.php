<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 002</title>
</head>
<body>
    <h1>Exemplo PHP</h1>
    
    <?php
        // Define o fuso horário para "America/Sao_Paulo"
        date_default_timezone_set("America/Sao_Paulo");

        // Exibe a data atual no formato dia/mês/ano
        echo "Hoje é dia " . date("d/M/Y");
        
        // Exibe a hora atual no formato hora:minuto:segundo e o fuso horário
        echo " e a hora atual é " . date("G:i:s T");
    ?>
</body>
</html>