<?php

/*
Repositorio de Git: https://github.com/adrianocaloni/TP-3_Prog1_DS2do2da.git 
 */

require_once 'Alumnos.php';

class AlumnoLibre extends Alumnos
{
    private $notaFinal;

    public function __construct($nombre, $apellido, $dni,$notaFinal)
    {
       parent::__construct($nombre, $apellido, $dni);
       $this-> notaFinal = $notaFinal;
      
    }

    public function getNota() 
    {
        return $this->notaFinal; 
    }

    public function __toString()
    {
        return "La nota Final del ALumnos es: {$this->notaFinal}";
    }

}