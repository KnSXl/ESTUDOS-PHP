# Expressões Aritméticas com PHP

5 + 2 / 2 = 3,5 👎

5 + (2 / 2) = 6 👍 -> maior precedência

## Ordem de Precedência

`( )`

`**` ↓

`*` -> `/` -> `%` ↓

`+` `-`

50 / 2 + 3 ** 2 ↓

3 ** 2 = 9 ↓

50 / 2 = 25 ↓

25 + 9 = 34

--- 

50 / (2 + 3) ** 2 ↓

2 + 3 = 5 ↓

5 ** 2 = 25 ↓

50 / 25 = 2