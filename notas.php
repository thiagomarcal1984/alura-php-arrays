<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6,
];

// rsort = Reverse sorting, inverte a ordenação por valor.
// asort = Associative Sort, ordena pelo valor do Array associativo, em ordem crescente. Mantém o índice de string.
// arsort = Associative Reverse Sort, ordena pelo valor do Array associativo, em ordem decrescente. Mantém o índice de string.
// ksort = Key Sort, ordena pelo índice do Array associativo, em ordem crescente. Mantém o índice de string.
// krsort = Key Reverse Sort, ordena pelo índice do Array associativo, em ordem decrescente. Mantém o índice de string.
krsort($notas); // Reverse sorting, inverte a ordeanação.
var_dump($notas);

// if (gettype($notas) === 'array') // Um meio de comparar se é array.
if (is_array($notas)) // Forma mais legível de comparar se é um array.
{
    echo "Sim, é um array.";
}

echo PHP_EOL;
echo "Testa se é uma lista indexada com inteiros: " . array_is_list($notas);

var_dump (array_is_list([])); // Um array vazio é uma lista.
var_dump (array_is_list($notas)); // Um array associativo não é uma lista.

echo PHP_EOL . "Teste com array_key_exists (procura índice Vinícius em \$notas): " . PHP_EOL;
echo "Vinícius fez a prova? ";
var_dump(array_key_exists('Vinicius', $notas)); // outro alias é key_exists.
// array_key_exists procura um índice em um array e retorna verdadeiro se encontrar.

echo PHP_EOL . "É possível que a chave seja nula. Por isso, usamos a 
função isset para confirmar se o elemento do array é nulo." . PHP_EOL;

var_dump(isset($notas['Vinicius']));