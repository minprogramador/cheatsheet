<?php

$texto = 'closure';

$var3 = function ($param = 'closure') use ($texto) {
    return $texto . ' ' . $param;
};

echo PHP_EOL;

echo $var3('1 com use $texto');
