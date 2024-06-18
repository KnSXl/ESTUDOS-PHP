<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <!-- Formulário -->
    <form action="index.php?tipo=TI&turno=noite" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Entrar">
    </form>
</body>
</html>