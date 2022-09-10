<?php

$y = 1;

//funcao 1
$fn1 = fn($x) => $x + $y;

// Funcao 2, equivalente ao usar $y por valor:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

var_export($fn1(3));
