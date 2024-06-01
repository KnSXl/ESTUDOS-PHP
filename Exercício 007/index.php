<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 007</title>
</head>
<body>
    <h1>Operadores Aritméticos do PHP</h1>

    <?php 
        $somaComString = "2" + "2";    // Resultado 4
        $soma = 5 + 2;    // resultado 7
        $subtracao = 5 - 2;    // Resultado 3
        $multiplicacao = 5 * 2;    // Resultado 10
        $divisaoReal = 5 / 2;    // Resultado 2.5
        $divisaoInteira = 5 % 2;    // Resultado 1
        $potencia = 5 ** 2;    // Resultado 25        

        echo "<p>Resultado de '2' + '2' = $somaComString</p>";
        echo "<p>Resultado de 5 + 2 = $soma</p>";
        echo "<p>Resultado de 5 - 2 = $subtracao</p>";
        echo "<p>Resultado de 5 * 2 = $multiplicacao</p>";
        echo "<p>Resultado de 5 / 2 = $divisaoReal</p>";
        echo "<p>Resultado de 5 % 2 = $divisaoInteira</p>";
        echo "<p>Resultado de 5 ** 2 = $potencia</p>";
    ?>
</body>
</html>