<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <?php 
            $cotacao = 5.35;

            $valor = $_REQUEST["valor"] ?? 0;
            $dolar = $valor / $cotacao;
            
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <b>" . numfmt_format_currency($padrao, $dolar, "USD") . "</b></p>";
        ?>
        
        <button onclick="javascript:window.location.href='index.php'">⬅️ Voltar</button>
    </main>
</body>
</html>