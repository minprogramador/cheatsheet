## Clean code exemplos de uso.

##### Use nomes que revelem seu propósito
```php
<?php

// Ruim
$ymd = date('Y-m-d');

// Bom
$dataAtual = date('Y-m-d');

/* Ruim */
$d = 0; //quantidade de dias trabalhados

/* Bom */ 
$diasUteis = 0;

//Ruim
foreach ($pessoas as $p) {
    echo $p->nome;
}

//Bom
foreach ($pessoas as $pessoa) {
    echo $pessoa->nome;
}
```

##### Condicionais (Utilize booleanos de forma implícita.)
```php
<?php

//Ruim
if (in_array(self::GRUPO_ADMINISTRADOR, $gruposAcesso)) {
    return true;
}

return false;

//Bom
return in_array(self::GRUPO_ADMINISTRADOR, $gruposAcesso));
```

##### Encapsule condicionais

```php
<?php

//Ruim
if ($artigo->status === 'publico') {
   // ...
}

//Bom
if ($artigo->statusPublico()) {
   // ...
}
```

##### Usar funções nativas
```php
<?php

/********** Ruim **********/
$nomeUsuarios = [];

foreach ($usuarios as $usuario) {
    $nomeUsuarios[] = $usuario->nome;
}

return $nomeUsuarios;

/********** Bom **********/
$nomeUsuarios = array_map(function ($usuario) {
       return $usuario->nome;
}, $usuarios);

return $nomeUsuarios;



/********** Ruim **********/
$usuariosAtivos = [];

foreach ($usuarios as $usuario) {
    if ($usuario->status == 'A') {
        $usuariosAtivos[] = $usuario;
    }
}

return $usuariosAtivos;

/********** Bom **********/
$usuariosAtivos = array_filter($usuarios, function ($usuario) {
    return $usuario->status == 'A';
});

return $usuariosAtivos;
```

##### Evite o uso de flags como parâmetro

```php
<?php

//Ruim
function criarArquivo(string $nome, bool $temp = false): void
{
    if ($temp) {
        touch('./temp/'.$nome);
    } else {
        touch($nome);
    }
}

//Bom
function criarArquivo(string $nome): void
{
    touch($nome);
}

function criarArquivoTemp(string $nome): void
{
    touch('./temp/'.$nome);
}
```

##### Argumentos de funções

```php
<?php

//Ruim
function criarMenu($title, $body, $buttonText, $cancellable) {
    // ...
}

//Bom
<?php
class MenuConfig
{
    public $title;
    public $body;
    public $buttonText;
    public $cancellable = false;
}
$config = new MenuConfig();
$config->title = 'Foo';
$config->body = 'Bar';
$config->buttonText = 'Baz';
$config->cancellable = true;
function criarMenu(MenuConfig $config) {
    // ...
}
```

##### Não adicione contexto desnecessário

```php
//Ruim
class Car
{
    public $carMake;
    public $carModel;
    public $carColor;

    //...
}

//Bom
class Car
{
    public $make;
    public $model;
    public $color;

    //...
}
```

##### Null coalescing operator

```php
//Ruim
if (isset($_GET['name'])) {
    $name = $_GET['name'];
} elseif (isset($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $name = 'nobody';
}

//Bom
$name = $_GET['name'] ?? $_POST['name'] ?? 'nobody';
```
