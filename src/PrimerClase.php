<?php
namespace src;
use src\SegundaClase;

class PrimerClase
{
    public function __construct
    (
        SegundaClase $SegundaClase
    )
    {
        echo $SegundaClase->holaMundo();
    }
}