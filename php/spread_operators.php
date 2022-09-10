<?php

$array = [1, 2];

function foo(int $a, int $b)
{
    return $a + $b;
}

print_r(foo(...$array));


function foo2($first, ...$outros)
{
    print_r($outros);
    //...
}

echo PHP_EOL;
print_r(foo2('a', 'b', 'c', 'd'));


function foo3($first, string ...$outros)
{
    //...
}

//foo('a', 'b', 'c', 'd', …);

//Novo array.
$a = [1, 2];
$b = [3, 4];

$result = [...$a, ...$b]; // [1, 2, 3, 4]

echo "\n\nNovo array:\n";
print_r($result);
