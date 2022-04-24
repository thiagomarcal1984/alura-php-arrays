<?php

$array = [
    1 => 'um',
    true => 'dois',
    1.3 => 'tres',
];

/**
 * Os arrays em PHP na verdade são HashMaps cujas chaves 
 * são os índices (sejam eles inteiros ou strings).
 * Ou seja, todos os arrays são associativos em PHP.
 *  */ 

var_dump($array);