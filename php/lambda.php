<?php

function run($msg)
{
    return $msg();
}

$var2 = function ($param = 'lambda 2') {
    return $param;
};

$var = function () {
    return 'lambda 1';
};

run(function () {
    return 'ola mundo';
});

echo $var();

echo PHP_EOL;

echo $var2('lambda 2');
