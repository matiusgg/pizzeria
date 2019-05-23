<?php

require_once('Persona.php');

class Repartidor extends Persona{

// PROPIEDADES

private $carnetAlimentacion;
private $especialidad;

// COSNTRUCTOR

// METODOS

// SETTER de $carnetAlimentacion

public setCarnetAlimentacion($carnetAlimentacion){


    $this->carnetAlimentacion = $carnetAlimentacion;


}


// SETTER de $espcialidad

public setespecialidad($especialidad){


    $this->especialidad = $especialidad;


}



}



?>