<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 007</title>
</head>
<body>
    <!-- Título da aula -->
    <h1>Expressões Aritméticas com PHP</h1>
    
    <!-- Exemplo de Ordem de Precedência -->
    <?php 
        $resultado1 = 5 + 2 / 2;
        $resultado2 = 50 / (2 + 3) ** 2;
        
        echo "
            O resultado é $resultado1
            <br>        
            O resultado é $resultado2
        ";
    ?>
</body>
</html>