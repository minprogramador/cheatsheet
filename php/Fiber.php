<?php

// function exibe(): void
// {
// }

// $fiber = new Fiber(exibe());
// $fiber->start();

$fiber = new Fiber(function (): void {
    for ($i = 1; $i < 10; $i++) {
        sleep(2);
        Fiber::suspend($i . PHP_EOL);
    }
//    $value = Fiber::suspend('fiber');
//  echo "Valor utilizado ao retomar a execução da fibra: {$value}\n";
});

$fiber2 = new Fiber(function (): void {
    for ($i = 1; $i < 10; $i++) {
//        sleep(1);
        Fiber::suspend($i . PHP_EOL);
    }
//    $value = Fiber::suspend('fiber');
//  echo "Valor utilizado ao retomar a execução da fibra: {$value}\n";
});
echo $fiber->start();
echo $fiber2->start();
echo "rodei no final agora";
//$fiber->resume(('test');

// $value = $fiber->start();
// echo "Valor da suspensão da fibra: {$value}\n";
while($res = $fiber->resume() and $res2 = $fiber2->resume()) {
    echo $res;
    echo "\n\n";
    echo $res2;
}
