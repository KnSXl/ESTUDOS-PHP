<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas Simples</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>

        <form action="resultado.php" method="post">
            <label for="valor">Quantos R$ você tem na carteira?</label>
            <input type="number" name="valor" id="valor" step="0.01" required>
            <input type="submit" value="Converter">
        </form>
    </main>    
</body>
</html>