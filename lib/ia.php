<?php
/**
 * Ejercicio hecho by Ximo Gil
 */
class ia
{

// Declaración de una propiedad
  public $columna='3';
  public $fila='2';


// Declaración de un método
  //Getter
public function getColumna(){
    return $this->columna;
  }
  public function getFila(){
    return $this->fila;
  }

  //Setter
  public function setColumna($col){
  $this->columna=$col;
  }
  public function setFila($fil){
  $this->fila=$fil;
  }

 //Random
  public function RandomPos(){
  }


}
 ?>
