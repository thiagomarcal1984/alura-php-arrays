<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9
    ],
];

function ordenaNotas(array $nota1, array $nota2) : int 
{
    // return $nota2['nota'] - $nota1['nota']; // Função resumida.

    if ($nota1['nota'] > $nota2['nota']){
        return -1; // Nota maior vem primeiro.
    };

    if ($nota1['nota'] < $nota2['nota']){
        return 1; // Nota menor vem depois no array.
    };

    return 0; // Mantém o elemento no mesmo lugar.
};

usort($notas, 'ordenaNotas'); // O usort pega o array e o nome da função de ordenação (formato de string).

var_dump($notas);