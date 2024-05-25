<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 004</title>
</head>

<body>
    <h1>Tipos Primitivos em PHP</h1>

    <?php
    // Exemplos de tipos de dados e coerção de tipos em PHP

    // Hexadecimal (0x), binário (0b), octal (0), e coerção científica (0e2)

    // Exemplo de número hexadecimal
    $num = 0x1A;  // 0x1A é hexadecimal para 26
    echo "O valor da variável hexadecimal é $num";

    // Exemplo de coerção científica para inteiro
    $num = (integer) 3e2;  // 3e2 é 3 x 10^2, resultando em 300
    echo "O valor após coerção científica é $num";
    var_dump($num);  // Exibe o tipo e valor da variável

    // Exemplo de coerção de string para inteiro
    $num = (int) "350";  // Converte a string "350" para o inteiro 350
    echo "O valor após coerção de string para inteiro é $num";
    var_dump($num);  // Exibe o tipo e valor da variável

    // Exemplo de valores inteiros
    $v = 300;  // Variável com valor inteiro
    var_dump($v);  // Exibe o tipo e valor da variável

    // Exemplo de valores reais (float)
    $v = 300.2;  // Variável com valor real
    var_dump($v);  // Exibe o tipo e valor da variável

    // Exemplo de valores string
    $v = "300";  // Variável com valor string
    var_dump($v);  // Exibe o tipo e valor da variável

    // Exemplo de valores booleanos
    $v = true;  // Variável com valor booleano
    var_dump($v);  // Exibe o tipo e valor da variável

    // Exemplo adicional de variável booleana
    $casado = true;  // Variável boolean indicando estado civil
    echo "O valor para casado é $casado";  // Exibe o valor booleano diretamente
    var_dump($casado);  // Exibe o tipo e valor da variável

    // Exemplo de array
    $vet = [6, 0, 5, 4, 1];  // Array de inteiros
    var_dump($vet);  // Exibe o tipo e valores do array

    // Exemplo de uso de classes
    class Pessoa {
        private string $nome;  // Propriedade privada do tipo string
    }

    $p = new Pessoa;  // Criação de uma instância da classe Pessoa
    var_dump($p);  // Exibe o tipo e detalhes do objeto
    ?>
</body>

</html>