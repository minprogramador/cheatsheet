<?php

$numeros = [10, 13, 15, 20];

$numeros = array_filter($numeros, function ($item) {
    return ($item % 5) == 0;
});

print_r($numeros);
