<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7, // O valor 7 está no segundo array, logo não vai aparecer em array_diff.
    'Maria' => 9,
];

$notasBimestre2 = [
    'Vinicius' => 7,
    'João' => 8,
    'Ana' => 10,
    'Maria' => 9,
];

// A função array_diff retorna um array contendo todos os elementos que 
// estão no primeiro parâmetro mas que não estão no segundo parâmetro.
// Apenas os valores são comparados, não os índices.
echo PHP_EOL . "Comparando com os valores: ";
var_dump(array_diff($notasBimestre1, $notasBimestre2));


$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7, // O índice 'Roberto não está no segundo array. Logo, vai aparecer em array_diff_key.
    'Maria' => 9,
];

$notasBimestre2 = [
    'Vinicius' => 7,
    'João' => 8,
    'Ana' => 10,
    'Maria' => 9,
];

// A função array_diff_key faz o mesmo, mas compara só os índices, não os valores.
echo PHP_EOL . "Comparando com as chaves: ";
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));


$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 9, // Mudou a nota.
    'Roberto' => 7,
    'Maria' => 10, // Mudou a nota.
];

// A função array_diff_assoc compara a existência da associação (chave e valor ao mesmo tempo).
echo PHP_EOL . "Comparando com a associação: ";
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9, 
    'Roberto' => 7,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);


echo PHP_EOL . "Mostra só os índices alunos que não apareceram em \$notasBimestre2: ";
var_dump(array_keys($alunosFaltantes)); 
// Note que os índices retornados da função array_keys são numéricos, não strings.

echo PHP_EOL . "Mostra só as notas que não apareceram em \$notasBimestre2: ";
var_dump(array_values($alunosFaltantes));
// Note que os values retornados da função array_keys são numéricos, não strings.

// array_combine combina um array de índices com um array de valores. 
echo PHP_EOL . "Gerando um array com a função array_combine: ";
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);
var_dump(array_combine($notasAlunos, $nomesAlunos)); // Note que as chaves e valores foram invertidos.

// Os dois arrays em array_combine devem ter os mesmos valores. Se não ocorre um erro.
// var_dump(array_combine($notasAlunos, $notasBimestre1)); 
// Fatal error: Uncaught ValueError: array_combine(): Argument #1 ($keys) and argument #2 ($values) must have the same number of elements in D:\alura\php-arrays\bimestres.php:97

echo PHP_EOL . "Invertendo chave/valor com a função array_flip: ";
var_dump(array_flip($alunosFaltantes));