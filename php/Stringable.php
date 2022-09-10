<?php

/**
 * Para ter certeza que $pessoa é __toString na hora de usar.
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
