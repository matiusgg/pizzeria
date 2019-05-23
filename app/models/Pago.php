<?php

// SUPERCLASE PAGO

class Pago{

    // PROPIEDADES
protected $id;
protected $fecha;
protected $ticket;
    // CONSTRUCTOR

    public function __construct($id, $fecha){

    
        $this->id = $id;
        $this->fecha = $fecha;
       
        
    }

    // METODOS

    // SETTER

    // setID

    public setID($id){

$this->id = $id;
    }

// setFecha

    public setFecha($fecha){

        $this->fecha = $fecha;
            }


// setID

    public setTicket($ticket){

        $this->ticket = $ticket;
            }




}




?>