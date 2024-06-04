<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Conversor de Moedas Simples</title>
</head>
<body>
    <!-- Cabeçalho do Site -->
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>

    <!-- Formulário para entrada de dados e conversão de moeda -->
    <form action="resultado.php" method="post">
        <label for="valor">Quantos R$ você tem na carteira?</label><br>
        <input type="number" name="valor" id="valor" required><br>
        <button type="submit">Converter</button>
    </form>
</body>
</html>