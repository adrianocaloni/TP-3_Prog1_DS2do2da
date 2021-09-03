<?php

require_once 'Alumnos.php';

class AlumnoPresencial extends Alumnos
{
    private static $diasHabiles;
    const PORCENTAJEMIN = 75;
    const TOTALPORCENTA =100;
    private $inasistencias;
    private $notas;
    

    public function __construct($nombre, $apellido, $dni, $inasistencias,$notas)
    {
       parent::__construct($nombre, $apellido, $dni);
       $this->inasistencias =$inasistencias;
       $this->notas=$notas;
       self::setDiasHabiles();
    
    }
    public static function setDiasHabiles ( ){
        self::$diasHabiles =  100 ;
    }

// Calcula si alguna nota de un TP es menor a 4,
// si alguna nota es menor a 4, la nota final es igual a 1, y si no existe ningun TP con nota menor a 4
// calcula la suma TOTAL de las Notas de TP divido la cantidad de TP
    public function calculaNotaTP (){

        foreach ($this->notas as &$valor){
            if($valor < 4){
                $notaFinal = 1;
                return $notaFinal;
            }
            else{
                $notaFinal= array_sum($this->notas)/count($this->notas);      
                return $notaFinal;  
            }
        }
  
    }

//Calcula el porcentaje de Asistencia final del alumno 
    public function calculaPorcentajeAsistencia(){

       $PorcentajeInasistencia = self::TOTALPORCENTA-($this -> inasistencias * self::TOTALPORCENTA / self::$diasHabiles) ;
        return $PorcentajeInasistencia;

    }

//Calcula la nota final del Alumno Presencial
    public function getNota() 
    { 

        if (($this->calculaPorcentajeAsistencia() >= self::PORCENTAJEMIN) && $this->calculaNotaTP() >= 4) {

            return $this->notaFinal = $this->calculaNotaTP();
    
        }
        else {
            return $this->notaFinal =1;
        }
    }

    public function __toString()
    {
        return "La nota final del alumno es: {$this->notaFinal}";
    }

}