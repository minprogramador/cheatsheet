<?php

namespace App;

/**
 * O método mágico __invoke() foi adicionado na versão 5.3 do PHP,
 * sendo este executado quando tentamos chamar um objeto como uma função
 * (bem parecido com uma função variável).
 */

class Logger
{
    public function __invoke($msg)
    {
        echo $msg;
    }
}

// $log = new Logger();
// $log("ola..");
