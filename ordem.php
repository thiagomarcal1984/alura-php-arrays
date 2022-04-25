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

// Escondendo a ordena notas para que a linha do usort use uma função de ordenação anônima.
// function ordenaNotas(array $nota1, array $nota2) : int 
// {
//     // return $nota2['nota'] - $nota1['nota']; // Função resumida sem o operador espaçonave.
//     return $nota2['nota'] <=> $nota1['nota']; // Operador "espaçonave". 
//     // Quem vem antes do operador aparece primeiro; quem vem depois do operador aparede depois.
// };

// usort($notas, 'ordenaNotas'); // O usort pega o array e o nome da função de ordenação (formato de string).

usort($notas, function(array $nota1, array $nota2){ // Inserção da função de ordenação (anônima).
    return $nota2['nota'] <=> $nota1['nota'];
});

// Link sobre as funções filter, map e reduce:
// https://www.alura.com.br/artigos/trabalhando-com-arrays-em-php
// array_filter => retorna um array com os dados que batem com os critérios de filtro.
// array_map => retorna um novo array cujos elementos foram alterados a partir dos dados do array original.
// array_reduce => retorna um valor que resume o conteúdo do array (por exemplo, somatório, multiplicatório etc.).
// Em comum, todas essas funções recebem como parâmetro uma referência ao array original e
// uma função anônima.

var_dump($notas);