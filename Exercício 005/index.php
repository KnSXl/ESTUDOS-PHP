<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 005</title>
</head>
<body>
    <h1>Manipulação de strings com PHP</h1>
    
    <?php
        // Prática de strings com aspas duplas e simples
        $nome = "Fulano"; // Definindo a variável $nome com uma string usando aspas duplas
        $sobrenome = "Sobrenome \u{1F596}"; // Definindo a variável $sobrenome com uma string e um emoji usando a notação Unicode
        
        // A linha abaixo está comentada porque a notação Unicode não funciona com aspas simples
        // $sobrenome = 'Sobrenome \u{1F596}';
        
        // Exibindo o nome completo concatenado com um emoji
        echo "$nome $sobrenome \u{1F596}";

        // Exibindo uma constante definida com aspas duplas e concatenando com outra string
        const CANAL = "Curso em Vídeo \u{1F499}"; // Definindo uma constante CANAL com uma string e um emoji
        // A linha abaixo está comentada porque a notação Unicode não funciona com aspas simples em constantes
        // const CANAL = 'Curso em Vídeo \u{1F499}';
        // A linha abaixo está comentada porque a constante não é interpolada dentro de aspas duplas
        // echo "Eu adoro o CANAL";
        
        // Exibindo uma string concatenada com a constante CANAL
        echo "Eu adoro o " . CANAL;

        // Exibindo o ano atual
        echo "Estamos no ano de " . date('Y');

        // Prática de concatenação de strings
        $name = "Fulano"; // Definindo a variável $name com uma string
        $surname = "Sobrenome"; // Definindo a variável $surname com uma string
        $apelido = "Bombado"; // Definindo a variável $apelido com uma string
        // Exibindo o nome completo com o apelido entre aspas
        echo "$name \"$apelido\" $surname";

        // Sintaxe Heredoc
        $canal = "Curso em video"; // Definindo a variável $canal com uma string
        $ano = date('Y'); // Definindo a variável $ano com o ano atual
        // Exibindo um bloco de texto com variáveis interpoladas usando a sintaxe Heredoc
        echo <<< TESTE
            Olá galera do $canal!
            Tudo bem com vocês?
            Como está sendo esse $ano?
            Abraços! \u{1F596}
        TESTE;

        // Sintaxe Nowdoc
        // Exibindo um bloco de texto sem interpolação de variáveis usando a sintaxe Nowdoc
        echo <<< 'TESTE'
            Olá galera do $canal!
            Tudo bem com vocês?
            Como está sendo esse $ano?
            Abraços! \u{1F596}
        TESTE;
    ?>
</body>
</html>