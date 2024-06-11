<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando um número Real</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>

        <form action="resultado.php" method="post">
            <label for="valor">Número real: </label>
            <input type="number" name="valor" id="valor" step="0.001" required>
            <input type="submit" value="Analisar">
        </form>
    </main>    
</body>
</html>