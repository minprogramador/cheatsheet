<?php

/**
 * array_filter
 * Itera sobre cada valor de array passando-os para a função callback.
 * Se a função callback retornar true, o valor atual de array é retornado
 * no array resultante.
 */

$numeros = [10, 13, 15, 20];

$func = function ($item) {
    return $item > 13;
};

$numeros = array_filter($numeros, $func);

print_r($numeros);
