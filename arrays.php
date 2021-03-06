<?php

/**
 * Os arrays em PHP na verdade são HashMaps cujas chaves 
 * são os índices (sejam eles inteiros ou strings).
 * Ou seja, todos os arrays são associativos em PHP.
 * 
 * Link sobre conversão de tipos em PHP: 
 * https://www.php.net/manual/en/language.types.integer.php#language.types.integer.casting
 * 
 * PodCast sobre Tabela Hash.
 * https://www.hipsters.tech/tabela-de-hash-hipsters-ponto-tech-222/
 * 
 *  */ 

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres',
];
$contador = 0;
foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é $nomeNumero." . PHP_EOL;
    $contador++;
}

echo PHP_EOL;
echo "Variável contador: " . $contador . PHP_EOL;
echo "Função count: " . count($array) . PHP_EOL;
echo "Função sizeof: " . sizeof($array) . PHP_EOL; // Count é um alias para sizeof (ou o contrário).

// var_dump($array);

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres',
];

echo "Índices [1, 2, 3]: " . var_dump(array_is_list($array)); // É uma lista é sequencial, mesmo começando por 1.

$array = [
    0 => 'um',
    1 => 'dois',
    2 => 'tres',
];

echo "Índices [0, 1, 2]: " . var_dump(array_is_list($array)); // É uma lista porque começa de 0 e é sequencial.

$array = [
    0 => 'um',
    1 => 'dois',
    3 => 'tres',
];

echo "Índices [0, 1, 3]: " . var_dump(array_is_list([$array])); // Não é uma lista porque a sequência não foi mantida.

$array = [
    '0' => 'um',
    '1' => 'dois',
    '3' => 'tres',
];

echo "Índices string [0, 1, 3]: " . var_dump(array_is_list([$array])); // Não é uma lista porque a sequência não foi mantida.
echo PHP_EOL . "Fim. " . PHP_EOL;