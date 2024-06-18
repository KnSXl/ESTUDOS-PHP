<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 011</title>
</head>

<body>
    <?php
        // Capturando os dados do Formulário retroalimentado
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
    ?>

    <main>
        <!-- Título da aula -->
        <h1>Formulários retroalimentados</h1>

        <!-- Modelo de formulário retroalimentado -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>

    </main>

    <!-- Resultado do formulário retroalimentado -->
    <section id="resultado">
        <h2>Resultado</h2>

        <?php 
            $soma = $valor1 + $valor2;
            echo "<p>A soma entre os valores $valor1 e $valor2 é <b>igual a $soma</b></p>";
        ?>
    </section>
</body>

</html>