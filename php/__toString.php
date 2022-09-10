<?php

namespace App;

class Pessoa
{
    public function __toString()
    {
        return 'to_string';
    }
}

function rodarFn(Pessoa $pessoa)
{
    return $pessoa;
}

$manoel = new Pessoa;
echo rodarFn($manoel);
