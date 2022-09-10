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

//--------- Outro modo de uso (lugar de if else) ---------//

$idade = 11;

$resultado = match (true) {
    $idade >= 65 => 'senhor',
    $idade >= 25 => 'adulto',
    $idade >= 18 => 'adolescente',
    default => 'criança',
};
echo PHP_EOL;
var_dump($resultado);
