<?php

$var = function () {
    return 'lambda 1';
};

$var2 = function ($param = 'lambda 2') {
    return $param;
};



echo $var();

echo PHP_EOL;

echo $var2('lambda 2');
