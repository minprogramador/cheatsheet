<?php
/*
 * É chamado quando usamos o var_dump em um objeto para poder
 * ver suas propriedades, nesse método mágico podemos alterar
 * o que o var_dump exibirá, conforme exemplo:
 */
namespace App;

class Pessoa
{
    private $altura = "1,80";

    public function __debugInfo()
    {
        return [
            "altura" => "2,00"
        ];
    }
}

$pessoa = new Pessoa();
print_r($pessoa);
echo PHP_EOL;
var_dump($pessoa);
