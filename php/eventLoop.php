<?php

namespace App;

use Fiber;

//event loop fiber.

class EventLoop1
{
    //...
    public function __construct(protected array $callStack = [])
    {
        //..
    }

    public function sleep(float $sec)
    {
        $stop = microtime(true) + $sec;
        while (microtime(true) < $stop) {
            $this->next();
        }
    }

    public function next(mixed $value = null)
    {
        return \Fiber::suspend($value);
    }
    public function defer(callable $callable): void
    {
        $this->callStack[] = new Fiber($callable);
    }

    public function run()
    {
        while ($this->callStack !== []) {
            foreach ($this->callStack as $id => $fiber) {
                echo $this->callFiber($id, $fiber);
            }
        }
    }

    protected function callFiber(int $id, \Fiber $fiber)
    {
        if ($fiber->isStarted() === false) {
            return $fiber->start($id);
        }

        if ($fiber->isTerminated() === false) {
            return $fiber->resume();
        }

        unset($this->callStack[$id]);
        return $fiber->getReturn();
    }
}


$loop = new EventLoop1();
$loop->defer(function () {
    echo file_get_contents('http://httpbin.org/headers');
    echo "chamou pelo event loop  sem slee 1p - " . time() . PHP_EOL;
});

$loop->defer(function () use ($loop) {
    echo "chamou pelo event loop 1 - " . time() . PHP_EOL;
    echo file_get_contents('http://httpbin.org/headers');
    $loop->sleep(0.5);
});

$loop->defer(function () use ($loop) {
    foreach (range(1, 30) as $val) {
        echo $val;
        $loop->next();
        echo file_get_contents('http://httpbin.org/headers');
        echo "chamou pelo event loop 222222 - " . time() . PHP_EOL;
    }
});

$loop->defer(function () {
    echo file_get_contents('http://httpbin.org/headers');
    echo "chamou pelo event loop  sem sleep 2 - " . time() . PHP_EOL;
});


$loop->defer(function () use ($loop) {
    foreach (range(1, 30) as $val) {
        echo $val;
        $loop->next();
        echo "chamou pelo event loop 2 - " . time() . PHP_EOL;
        $loop->sleep(0.8);
    }
});

echo $loop->run();
