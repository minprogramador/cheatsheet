<?php

function info(string $nome, bool $isAdmin)
{
    if ($isAdmin) {
        return "é admin";
    }

    return 'nao é admin';
}

echo info(isAdmin:true, nome:'manoel');
echo PHP_EOL;
echo info(nome:'manoel', isAdmin:false);
echo PHP_EOL . PHP_EOL;
//...

function runfn($name, $expires)
{
    echo ("\nrunfn:\nname: {$name}\nexpires: {$expires}\n");
}

$data = [
    'name' => 'test',
    'expires' => time() + 60 * 60 * 2,
];

runfn(...$data);
