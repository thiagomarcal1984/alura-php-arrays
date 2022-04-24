<?php

$notas = [
    10,
    8,
    9,
    7,
    6,
];

rsort($notas); // Reverse sorting, inverte a ordeanação.
var_dump($notas);


// Exemplo com array associativo.
$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6,
];

// asort = Associative Sort, ordena pelo valor do Array associativo, em ordem crescente. Mantém o índice de string.
// arsort = Associative Reverse Sort, ordena pelo valor do Array associativo, em ordem decrescente. Mantém o índice de string.
// ksort = Key Sort, ordena pelo índice do Array associativo, em ordem crescente. Mantém o índice de string.
// krsort = Key Reverse Sort, ordena pelo índice do Array associativo, em ordem decrescente. Mantém o índice de string.
krsort($notas); // Reverse sorting, inverte a ordeanação.
var_dump($notas);

// usort = User sort, ordena pelo valor o Array associativo, em ordem crescente. É necessário fornecer uma função de comparação definida pelo usuário.
// uksort = User key sort, ordena pela chave o Array associativo, em ordem crescente. É necessário fornecer uma função de comparação definida pelo usuário.

function userSort($nota1, $nota2) {
    return $nota1 <=> $nota2; // Ordem crescente de índice.
    // return $nota2 <=> $nota1; // Ordem decrescente de índice.
}

uksort($notas, 'userSort'); // O ksort já é suficiente pra isso.

var_dump($notas);