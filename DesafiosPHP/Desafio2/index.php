<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>

        <?php
            $numero = mt_rand(0, 100);
            echo "<p>Gerando um número aleatório entre 0 e 100...<br>
            O valor foi <b>$numero</b></p>"
        ?>
        <button onclick="javascript:document.location.reload()">🔄️ Gerar Outro</button>
    </main>
</body>
</html>