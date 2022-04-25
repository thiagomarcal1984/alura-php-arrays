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
