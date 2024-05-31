# Manipulação de strings com PHP

## Quatro formatos de Strings

* double quated
* single quoted
* Heredoc
* Nowdoc

## Strings em PHP

**concatenation operator**: `.`

**double quoted**: "Curso"

**double quoted**: "Curso" . "PHP" = `CursoPHP`

**double quoted**: "PHP\u{1f418}" = `PHP🐘`

**single quoted**: 'PHP\u{1f418}' = `PHP\u{1f418}`

---

`$nome = "Fulano";`

`echo "Olá $nome";` = Olá Fulano

`echo 'Olá $nome';` = Olá $nome

---

`const ESTADO = "RJ";`

`echo "Moro no ESTADO";` = Moro no ESTADO

`echo 'Moro no ESTADO';` = Moro no ESTADO

`echo 'Moro no ' . ESTADO;` = Moro no RJ

`$nome = "Rodrigo"`

`$Snom = "Nogueiro"`

`echo "$nom "Minotauro" $snom"` = ERRO

`echo `$nom "Minotauro" $snom`` = Minotauro

`echo "$nom \"Minotauro"\ $snom"` = Rodrigo Minotauro Nogueiro


## ESCAPE SEQUENCES

`\n` Nova linha

`\t` Tabuação horizontal

`\\` Barra invertida

`\$` Sinal de cifrão

`\u{}` Codepoint Unicode

## Sintaxe Heredoc

`$curso = "PHP";`

`$ano = date('Y');`

```
echo <<< FRASE
    Estou estudando $curso em $ano
    
    FRASE; = Estou estudando PHP em 2024
```

## Nowdoc

`$curso = "PHP";`

`$ano = date('Y');`

```
echo <<< 'FRASE'
    Estou estudando $curso em $ano
    
    FRASE; = Estou estudando PHP em 2024
```