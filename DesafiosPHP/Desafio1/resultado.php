<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resultado</title>
</head>

<body>
    <!-- Cabeçalho da página com um título principal -->
    <header>
        <h1>Resultado Final</h1>
    </header>

    <main>
        <!-- Bloco PHP que processa e exibe o número escolhido pelo usuário -->
        <?php
            // Obtém o número enviado pelo formulário via método GET
            $numeroEscolhido = $_GET["numero"];
            
            // Trata o número
            if (!$numeroEscolhido) {
                echo "Nenhum número foi escolhido <br>
                    <button>
                        <a href='javascript:history.go(-1)'>⬅️ Voltar para a página anterior</a>
                    </button>";
                return;
            };

            // Exibe o número escolhido
            echo "O número escolhido foi <b>$numeroEscolhido</b>";
        ?>
        <br>

        <!-- Bloco PHP que calcula e exibe o antecessor do número escolhido -->
        <?php 
            // Calcula o antecessor do número escolhido
            $numeroAntecessor = $numeroEscolhido - 1;

            // Exibe o antecessor
            echo "O seu <i>antecessor</i> $numeroAntecessor";
        ?>
        <br>

        <!-- Bloco PHP que calcula e exibe o sucessor do número escolhido -->
        <?php 
            // Calcula o sucessor do número escolhido
            $numeroSucessor = $numeroEscolhido + 1;

            // Exibe o sucessor
            echo "O seu <i>sucessor</i> $numeroSucessor";
        ?>
        <br><br>

        <button>
            <a href="javascript:history.go(-1)">⬅️ Voltar para a página anterior</a>
        </button>
    </main>
</body>
</html>