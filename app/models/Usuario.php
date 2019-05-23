<?php

require_once('Persona.php');

class Usuario{


// Prpiedades

// Si tenemos propiedades con PRIVATE o PROTECTED en una clase, y queremos cambiar sus atributos, entonces ya sean PADRE o HIJOS cada clase si tiene estas propiedas con PRIVATE o PROTECTED deben tener SETTEr o GETTER para poder cambiar sus atributos.

// Aqui no pusimos PROTECTED porque esta subclase no le va acompartir a mas clases, por lo cual a diferencia del Padre-clase que si tenia que compartirle las propiedades a los hijos y por eso usabamos PROTECTED. Aqui solo usaremos $password para solo esta clase.

private $password;

// METODO SETTER a LA $passwword, porque SETTEr nos permite condicionar la propiedad, y lo que queremos es tambien condicionarla porque es una constraseña. Es decfri a parte de que queremos cambiarle sus atributos, tambien la queremos condicionar.


public function setPassword($password){

// ctype_lower: Te permite averiguar o verificar si el dato esta en minusculas
    if((strlen($password) < 8 or strlen($password) > 12)&& ctype_lower($password)){

        echo('ERROR: en la constraseña, vuelva a intentarlo');
    }

    echo('Bien');
}

$this->password = $password;


}


$clemente = new Persona(0143,'Clemente', 'Calle Manacor', '64353434');

//Ahora como en el PADRE hicimos un SETTER a la prpiedad $dni para poder cambiar sus atrivutos y poder llamarla, entonces ahora podemos llamarla.
$clemente->setDni('34354555656');
$clemente->setPassword('000');


?>