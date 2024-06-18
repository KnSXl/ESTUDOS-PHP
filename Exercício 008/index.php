<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 008</title>
</head>
<body>
    <!-- Título da aula -->
    <h1>Funções Aritméticas do PHP</h1>
    
    <!-- Exemplos de Funções Aritméticas do PHP -->
    <?php 
        $resultado1 = abs(500);
        $resultado2 = base_convert(254, 10, 8);
        $resultado3 = intdiv(5, 2);
        $resultado4 = min(5, 2, 8);
        $resultado5 = max(5, 2, 8);
        $resultado5 = max(5, 2, 8);
        $resultado6 = pi();
        $resultado7 = pow(5, 2);
        $resultado8 = sqrt(81);
        
        echo "
            A resposta do Valor absoluto é: $resultado1

            <br>

            A resposta do número convertido de uma base numérica especificada para outra base é: $resultado2            
            
            <br>

            A resposta da parte inteira da divisão é: $resultado3
            
            <br>

            A resposta do numero menor é: $resultado4

            <br>

            A resposta do numero maior é: $resultado5

            <br>

            A resposta de PI é: $resultado6
            
            <br>

            A resposta da potência é: $resultado7
            
            <br>

            A resposta da raiz quadrada é: $resultado8
        ";        
    ?>
</body>
</html>