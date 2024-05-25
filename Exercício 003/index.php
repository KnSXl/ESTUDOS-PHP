<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 003</title>
</head>

<body>
    <h1>Variáveis e Constantes</h1>

    <!-- Exemplo de uso de Variáveis e Constantes em PHP -->
    <?php
        // Definição de variáveis que podem ter seus valores alterados
        $nome = "Kauã";
        $sobrenome = "Nascimento da Silva";

        // Definição de uma constante com um valor fixo
        const pais = "Brasil";

        // Exemplo de alteração do valor de uma variável
        // $nome = "Fulano";  // Comentado, mas demonstra como alterar o valor de uma variável

        // Saída de uma mensagem concatenando variáveis e constantes
        echo "Muito prazer, $nome $sobrenome! Você mora no " . pais;

        // Exemplo de Case Sensitivity em variáveis
        $nome = "Kauã";  // Variável $nome
        $Nome = "Fulano";  // Variável $Nome diferente de $nome devido à sensibilidade a maiúsculas e minúsculas
        echo "É verdade que seu nome é $Nome";

        // Uso de variáveis com caracteres especiais
        $salário = 2000;  // Variável com acento
        echo "Seu salário é de R$ $salário";
        
        $valorμ = 100;  // Variável com caractere especial (μ)
        echo "O valor é igual a $valorμ no programa";

        // Definição e uso de constantes com diferentes convenções de nomenclatura
        const _TX = 850;  // Constante começando com sublinhado
        echo "Resultado = " . _TX;

        // Exemplos de convenções de nomenclatura: CamelCase e Snake_Case
        $nomeCompletoCliente = "Camel Case";  // Notação CamelCase
        $telefone_contato_fornecedor = "Snake Case";  // Notação Snake_Case
    ?>
</body>

</html>