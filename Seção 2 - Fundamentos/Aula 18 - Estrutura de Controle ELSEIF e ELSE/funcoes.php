<?php
    function saudacao(): string {
        $hora = 5;

        if ($hora >= 0 && $hora <= 5) {
            $saudacao = 'Boa madrugada!';
        }  else if ($hora >= 6 && $hora <= 12 ) {
            $saudacao = 'Boa dia!';
        } else if ($hora >= 13 && $hora <= 18) {
            $saudacao = 'Boa tarde!';
        } else {
            $saudacao = 'Boa noite!';
        }
        
        return $saudacao;
    }

    function resumirTexto(string $texto, int $limite, string $continue = '...'): string {
        return $texto;
    }
?>