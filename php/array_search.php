<?php

/**
 * array_search — Procura por um valor em um
 * array e retorna sua chave correspondente
 * caso seja encontrado
 */

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

echo array_search('green', $array); // $key = 2;
echo PHP_EOL;
echo array_search('red', $array);   // $key = 1;
