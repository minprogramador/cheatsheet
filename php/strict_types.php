<?php

/*
 * Força a tipagem no php.
 */

declare(strict_types=1);

function add(int $x, int $y): int
{
    return $x + $y;
}

echo add(1, 2);
echo PHP_EOL;
echo add("1", 3); //error string...
