<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Antecessor e Sucessor</title>
</head>
<body>
    <!-- Cabeçalho da página com um título principal -->
    <header>
        <h1>Informe um número</h1>
    </header>

    <!-- Seção que contém o formulário para entrada do número -->
    <section>
        <!-- Formulário que envia os dados para "resultado.php" usando o método GET -->
        <form action="resultado.php" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="idnumero">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>