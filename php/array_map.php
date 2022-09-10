<?php

/*
 * array_map
 * A função array_map serve para remapear e gerar um
 * novo array a partir de um existente, como por exemplo:
 * Você tem um array de nomes e quer transformar todos em
 * maiusculo.
 */

$nomes = ['manoel', 'joao', 'maria', 'junior'];

$nomes = array_map(function ($nome) {
    return strtoupper($nome);
}, $nomes);

print_r($nomes);
