<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    
    <title>Exercício 006</title>
</head>

<body>
    <header>
        <h1>Obtendo dados de formulários com PHP (parte 1) e (parte 2)</h1>
        <h1>Apresente-se para nós</h1>
    </header>

    <section>
        <!-- Seção que contém o formulário para entrada de dados -->
        <form action="cadastro.php" method="get">
            <!-- Formulário que envia dados para o arquivo 'cadastro.php' usando o método GET -->

            <label for="nome">Nome:</label>     <!-- Rótulo para o campo de entrada de texto do nome -->
            <input type="text" name="nome" id="idnome">     <!-- Campo de entrada de texto para o nome, com o atributo 'name' definido como 'nome' e o atributo 'id' como 'idnome' -->

            <label for="sobrenome">Sobrenome:</label>   <!-- Rótulo para o campo de entrada de texto do sobrenome -->
            <input type="text" name="sobrenome" id="idsobrenome">   <!-- Campo de entrada de texto para o sobrenome, com o atributo 'name' definido como 'sobrenome' e o atributo 'id' como 'idsobrenome' -->

            <input type="submit" value="Enviar">    <!-- Botão de envio do formulário com o texto "Enviar" -->
        </form>
    </section>

</body>
</html>