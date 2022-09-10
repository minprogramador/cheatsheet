<?php

function myFunction(int|float $number): int
{
    return round($number);
}

echo myFunction(1);
