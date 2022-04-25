<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patrícia',
    'Nico',
    'Kilderson',
    'Daiane',
];

// array_merge serve para mesclar dois arrays. 
// Os índices numéricos são perdidos. 
$alunos2022 = array_merge($alunos2021, $novosAlunos);
var_dump($alunos2022);

// Se os índices forem de string, os valores dos arrays posteriores reescrevem os valores anteriores.
$ex1 = [
    'k1' => 'Um',
    'k2' => 'Dois',
];

$ex2 = [
    'k1' => 'One',
    'k3' => 'Three',
];

var_dump(array_merge($ex1, $ex2));



$alunos2021 = [
    0 => 'Vinicius',
    1 => 'João',
    2 => 'Ana',
    3 => 'Roberto',
    4 => 'Maria',
];

$novosAlunos = [
    5 => 'Patrícia',
    6 => 'Nico',
    7 => 'Kilderson',
    8 => 'Daiane',
];

$alunos2022 = $alunos2021 + $novosAlunos; // "+" = união de arrays.
// O sinal mais é um operador de união de arrays. Mas ele não permite sobre-escrita de valores anteriores.
var_dump($alunos2022);

$ex1 = [
    'Um',
    'Dois',
];

$ex2 = [
    'One',
    'Two',
    'Three',
    'Four',
];

var_dump($ex1 + $ex2); // Repare que as palavras 'One' e 'Two' não aparecem no resultado.
// O operador união (+) e a função array_merge tem comportamentos diferentes ao mesclar arrays.


// O operador desempacotamento (três pontos: ...) converte arrays em elementos 
// soltos, não ordenados em arrays. Antes da versão 8.1 do PHP não era possível
// fazer unpacking de arrays indexados com strings.
$alunos2022 = [...$alunos2021, 'Carlos Vinícius', ...$novosAlunos];
// Os colchetes criam um novo array. O desempacotamento solta os elementos e 
// permite intercalação de outros elementos, como o nome 'Carlos Vinícius'.
var_dump($alunos2022);

// Os três pontos representa dois operadores: o de unpacking (desempacotamento) e o de spread.
// O spread operator serve para indicar uma sequência de parâmetros.
// https://www.php.net/manual/en/language.types.array.php#language.types.array.unpacking
// https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list

// function f1(string ...$v) // O spread operator flexibiliza o número de entradas.
// {
//     foreach ($v as $el) {
//         echo $el . PHP_EOL;
//     }
// }

// f1('Um', 'Dois', 'Três');
// f1('Quatro', 'Cinco');

// function f2(int $h, int $w, int $l) 
// {
//     return $h * $w * $l;
// }
// var_dump(f2(...[3,3,3])); // Os parâmetros de f2 não é um array: é um spread do array para três variáveis.

// array_push recebe a referência de um array e um spread argument como argumentos.
// Não há retorno de no array_push, mas sim do número de elementos do array:
//  o array referenciado é modificado.
array_push($alunos2022, 'Alice', 'Bob', 'Charlie'); 

// É possível inserir um objeto com a sintaxe $array[] = 'valor':
$alunos2022[] = 'Luiz';

// array_unshift insere elementos no início do array. Ele também recebe um
// array e um spread argument como argumentos.
array_unshift($alunos2022, 'Stephane', 'Rafaela');

// array_shift move o índice para a direita. Na prática, remove o primeiro elemento 
// do array. O array_unshift faz o contrário: insere no início do array.
echo array_shift($alunos2022) . PHP_EOL; // Removeu Stephane.

// array_pop retira o último elemento do array.
echo array_pop($alunos2022) . PHP_EOL; // Remove o Luiz do array $alunos2022.

var_dump($alunos2022);