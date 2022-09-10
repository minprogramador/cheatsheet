<?php

$texto = 'lambda';

$var = function () {
    return 'lambda 1';
};

$var2 = function ($param = 'lambda 2') {
    return $param;
};

$var3 = function ($param = 'lambda 3') use ($texto) {
    return $texto . ' ' . $param;
};


echo $var();

echo PHP_EOL;

echo $var2('lambda 2');

echo PHP_EOL;

echo $var3('3 com use $texto');
