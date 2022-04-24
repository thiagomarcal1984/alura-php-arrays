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
    true => 'dois',
    1.3 => 'tres',
];

var_dump($array);