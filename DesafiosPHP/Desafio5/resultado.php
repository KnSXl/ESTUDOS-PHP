<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>

        <?php
            $valor = $_REQUEST["valor"] ?? 0;

            echo "<p>Analisando o número <b>" . number_format($valor, 3, ",", ".") . "</b> informado pelo usuário</p>";

            $inteiro = (int) $valor;
            $real = $valor - $inteiro;

            echo "
                <ul>
                    <li>
                    A parte inteiro do número é <b>" . number_format($inteiro, 0, ',', '.') . "</b>
                    </li>
                    <li>
                    A parte fracionaria do número é <b>" . number_format($real, 3, ',', '.') . "</b>
                    </li>
                </ul>"
        ?>
        <button onclick="javascript:history.go(-1)">⬅️ Voltar</button>
    </main>
</body>
</html>