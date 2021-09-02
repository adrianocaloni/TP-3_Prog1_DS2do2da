<?php

/*
Repositorio de Git: https://github.com/adrianocaloni/TP-3_Prog1_DS2do2da.git 
 */
class Alumnos
{
    protected $nombre;
    protected $apellido;
    protected $dni;

    public function __construct($nombre, $apellido, $dni)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
    }

    
    public function getNombreApellido() 
    {
        return $this->nombre . " " . $this->apellido;
    }

    public function getDNI()
    {
        return $this->dni;
    }
    

}

