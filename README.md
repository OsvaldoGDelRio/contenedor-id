[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/OsvaldoGDelRio/contenedor-id/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/contenedor-id/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/contenedor-id/badges/build.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/contenedor-id/build-status/main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/contenedor-id/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)
# contenedor-id
Clase en PHP para hacer inyección de dependencias usando Reflection

## composer
```shell
composer require osvaldogdelrio/contenedor-id
```

## Ejemplo de uso
```php
<?php
declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

use src\contenedorId\Contenedor;
/*
Ejemplo de uso
Creamos el contenedor
*/
$contenedor = new Contenedor;
/*
Llamamos la clase que queremos crear
El Contenedor automaticamente creará el objeto PrimerClase al que llama la SegundaClase
Las rutas no las adivina, pero se pueden mapear dentro de la clase Contenedor o escribir el namespace completo en el constructor
*/
$contenedor->obtener('src\PrimerClase');
```
