<?php

/**
 * Mesma cois que __toString o Stringable
 */

namespace App;

use Stringable;

class Pessoa
{
    public function __toString()
    {
        return 'to_string';
    }
}

function rodarFn(Stringable $pessoa)
{
    return $pessoa;
}

$manoel = new Pessoa;
echo rodarFn($manoel);
