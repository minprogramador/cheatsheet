<?php

/**
 * Destructuring - Desestruturando arrays.
 * @version 7.1
 */

$array = [1, 2, 3];

// Using the list syntax:
list($a, $b, $c) = $array;

// Or the shorthand syntax:
[$a, $b, $c] = $array;

echo $a;
