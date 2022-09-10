<?php

//antes do php 7
$usuario = isset($data['usuario']) ? $data['usuario'] : 'else?';
var_dump($usuario);

echo PHP_EOL;

// depois do php
$usuario = $data['usuario'] ?? 'else?';
var_dump($usuario);

echo PHP_EOL;

//mock $data[...]
$data['usuario'] = 'manoel';

// depois do php 7.4
$data['usuario'] ??= 'else?';

var_dump($data['usuario']);
