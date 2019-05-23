<?php


class Persona{

    // Propiedades

    // Usamos PROTECTED para que podamos compartir las propiedades del padre a los hijos, pero solo mediante clases no afuera como si con PUBLIC.

    protected $id;
    protected $dni;
    protected $nombre;
    protected $apellidos;
    protected $email;
    protected $direccion;
    protected $localidad;
    protected $telefono;



    // Cosntructor

    // Aunque las porpiedades esten en PROTECTED, el constructor permite de todas formas que podamos llamarlas desde el () del objeto al momento del crearlo, esto es porque como vemos en este caso nos beneficia tener el constructor en public, pero si no fuera asi, pues simplemente seria crear otro SETTER o GETTER para visualizarlo, y para cambiar sus atributos y asi poder usarlo.

    // Como vemos pusimos todos meons $dni, ya que no queremos que salga a menos que lo llamemos en el objeto, pero como esta en PROTECTED entonces creamos un SETTER para poner cambiar sus atributos y asi poder llamarlo cuando cambiemos los objetos.


        public function __construct($id, $nombre, $direccion, $telefono){

    
            $this->id = $id;
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
           
            
        }

    // Metodos

    // ENCAPSULAMIENTO: para poder usar esta spropiedades y cambiar sus atributos

    // Generamos un SETTER para DNI para poder cambiarla y poder llamarla
    public function setDni($dni){

$this->dni = $dni;
    }

 
    
    
}



?>