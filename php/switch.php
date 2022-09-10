<?php

switch (8.0) {
    case 8.0:
        $result = "opa 8.0 é igual case 8.0!";
        break;
    case 1.0:
        $result = "Ops 8.0 é diferente de 1.0";
        break;
}

echo $result;
echo PHP_EOL;

// com if else.
if (8.0 === 8.0) {
    $result = "opa 8.0 é igual if 8.0!";
} elseif (8.0 == 1.0) {
    $result = "Ops 8.0 é diferente de 1.0";
}

echo $result;
