<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resultado</title>
</head>

<body>
    <main>
        <h1>Resultado Final</h1>

        <p>
            <?php
                $numero = $_REQUEST["numero"] ?? 0;
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "
                    O número escolhido foi <b>$numero</b><br>
                    O seu <i>antecessor</i> é $antecessor<br>
                    O seu <i>sucessor</i> é $sucessor
                ";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.php'">⬅️ Voltar</button>
    </main>
</body>
</html>