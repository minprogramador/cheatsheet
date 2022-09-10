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
