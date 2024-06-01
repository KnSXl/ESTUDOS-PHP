<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">

    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php
        // var_dump($_GET);    // $_GET, $_POST, $_COOKIES
        // Linha comentada para depuração, que imprime o conteúdo da superglobal $_GET

        $nome = $_GET["nome"] ?? "Nome";    // Atribui o valor do parâmetro 'nome' da URL à variável $nome, ou "Nome" se não estiver presente
        $sobrenome = $_GET["sobrenome"] ?? "Desconhecido(a)";   // Atribui o valor do parâmetro 'sobrenome' da URL à variável $sobrenome, ou "Desconhecido(a)" se não estiver presente
        echo "<p>É um prazer te conhecer, <b>$nome $sobrenome</b>! Este é o meu site!</p>";     // Exibe uma mensagem de boas-vindas usando os valores das variáveis $nome e $sobrenome
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>    <!-- Link para voltar para a página anterior usando JavaScript -->
    </main>

</body>
</html>