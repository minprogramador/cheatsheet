<?php


$function = [
    'up' => function ($texto) {
        return mb_strtoupper($texto);
    },
    'down' => function ($texto) {
        return mb_strtolower($texto);
    }
];

echo $function['up']('alterar esse texto 1') . PHP_EOL;

echo $function['down']('alterar esse texto2') . PHP_EOL;
