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
echo PHP_EOL;

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

$statusCode = 200;
$message = match ($statusCode) {
    200, 300, 301, 302 => 'combined expressions',
};

echo PHP_EOL;
echo match (8.0) {
    '8.0' => "Oh no!",
     8.0 => "This is what I expected",
};
echo PHP_EOL;
//................................................//
function showType($param)
{
    return match ($param) {
        1 => 'Integer',
        '1' => 'String',
        true => 'Boolean',
    };
}

echo showType(1) . PHP_EOL; // "Integer"
echo showType('1') . PHP_EOL; // "String"
echo showType(true) . PHP_EOL; // "Boolean"
