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
    // return $nota2['nota'] - $nota1['nota']; // Função resumida sem o operador espaçonave.
    return $nota2['nota'] <=> $nota1['nota']; // Operador "espaçonave". 
    // Quem vem antes do operador aparece primeiro; quem vem depois do operador aparede depois.
};

usort($notas, 'ordenaNotas'); // O usort pega o array e o nome da função de ordenação (formato de string).

var_dump($notas);