<?php

//antes do php 7
$usuario = isset($data['usuario']) ? $data['usuario'] : 'else?';
var_dump($usuario);

echo PHP_EOL;

// depois do php
$usuario = $data['user'] ?? 'else?';
var_dump($usuario);