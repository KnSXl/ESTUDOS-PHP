<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <?php
            $dataInicio = date("m-d-Y", strtotime("-7 days"));
            $dataFim = date("m-d-Y");

            $apiURL = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $dataInicio .'\'&@dataFinalCotacao=\''. $dataFim .'\'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
            $dados = json_decode(file_get_contents($apiURL), true);
    
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $valor = $_REQUEST["valor"] ?? 0;
            $dolar = $valor / $cotacao;
            
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <b>" . numfmt_format_currency($padrao, $dolar, "USD") . "</b></p>";
        ?>
        
        <button onclick="javascript:window.location.href='index.php'">⬅️ Voltar</button>
    </main>
</body>
</html>