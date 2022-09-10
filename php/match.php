<?php

function mariaFn()
{
    return 'maria fn';
}

$name = 'jose';

$meuNome = match ($name) {
    'manoel' => 'nome manoel string',
    'maria' => mariaFn(),
    'jose' => true
};

if ($meuNome === true) {
    echo 'meunome === jose true';
}

var_dump($meuNome);
