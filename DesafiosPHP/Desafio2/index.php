<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sorteador de Números</title>
</head>
<body>
    <header>
        <!-- Título principal da página -->
        <h1>Trabalhando com Números Aleatórios</h1>
    </header>

    <!-- Seção principal para exibir o número aleatório -->
    <section>
        Gerando um número aleatório entre 0 e 100...<br>
        O Valor gerado foi 
        <?php
            // Função que gera um número aleatório entre 0 e 100
            function gerarNumeroAleatorio() {
                return rand(0, 100);
            }

            // Chama a função para gerar o número aleatório e armazena o resultado na variável $valorAleatorio
            $valorAleatorio = gerarNumeroAleatorio();
            
            // Exibe o valor gerado em negrito
            echo "<b>$valorAleatorio</b>";
        ?>
        <br>
        <!-- Formulário com botão para gerar outro número aleatório -->
        <form>
            <button>Gerar Outro</button>
        </form>
    </section>
</body>
</html>