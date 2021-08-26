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
