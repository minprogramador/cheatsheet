<?php

/**
 * Array Unpacking vs array_merge
 * No js chamado de spread operator ...[]
 */


$array_unpack = [
    ...['a' => 'foo'],
    ...['b' => 'bar'],
    ...['c' => 'baz']
];

$array_merge = array_merge(
    ['a' => 'foo'],
    ['b' => 'bar'],
    ['c' => 'baz'],
);

echo $array_unpack === $array_merge;
// true
