
## Dicas Laravel Dusk

- Instalação do pacote
```bash
composer require --dev laravel/dusk
```

- Instalar dusk
```bash
php artisan dusk:install
```

- Instalar ChromeDriver dusk manualmente
```bash
php artisan dusk:chrome-driver
```

- Criando um teste dusk em tests/Browser/ExemploTest.php
```bash
php artisan dusk:make ExemploTest
```

- Criando um teste dusk dentro de uma pasta (tests/Browser/Pasta/...)
```bash
php artisan dusk:make Pasta/ExemploTest
```

- Executar dusk/rodar tests
```bash
php artisan dusk
```

- Executar um método de teste pelo nome
```bash
php artisan dusk --filter testNomeDaFuncaoDeTeste
```

- Executar todos os métodos de uma class
```bash
php artisan dusk --filter ClassNomeTest
```

- Executar dusk para arquivo especifico
```bash
php artisan dusk tests/Browser/ExemploTest.php
```
