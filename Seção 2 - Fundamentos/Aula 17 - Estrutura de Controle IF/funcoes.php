<?php
    function saudacao(): string {
        $hora = 5;
        $saudacao = '';

        if ($hora >= 0 && $hora <= 5) {
            $saudacao = 'Boa madrugada!';
        };
        
        if ($hora >= 6 && $hora <= 12) {
            $saudacao = 'Bom dia!';
        };

        return $saudacao;
    }

    function resumirTexto(string $texto, int $limite, string $continue = '...'): string {
        return $texto;
    }
?>