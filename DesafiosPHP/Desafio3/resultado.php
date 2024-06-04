<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>

    <?php 
        // Obtém o valor enviado pelo formulário através do método POST
        $valor = $_POST["valor"];

        // Converte o valor em reais para dólares americanos usando uma taxa de câmbio fixa
        $valorConvertido = $valor * 5.29;

        // Exibe o resultado da conversão em uma mensagem formatada
        echo "
            <p>Seus R$ $valor equivalem a <b>US$ $valorConvertido</b></p>
            <b>Cotação fixa de R$ 5,29</b> informada diretamente no código
        ";
    ?>
</body>
</html>