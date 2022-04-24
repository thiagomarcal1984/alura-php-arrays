<?php

$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas; // Cópia do conteúdo da variável $notas para $notasOrdenadas.
sort($notasOrdenadas); // O sort pega a variável por referência: a ordem das notas serão modificadas na variável de origem.

echo "Notas desordenadas: ";
var_dump($notas);

echo "Notas ordenadas: ";
var_dump($notasOrdenadas);