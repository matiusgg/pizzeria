<?php

class Pizza{

    // PORPIEDADES



    private $id;
    private $img;
    private $nombrepizza;
    private $queso = 'No incluido';
    private $carne = 'No incluido';
    private $pollo = 'No incluido';
    private $pescado = 'No incluido';
    private $tipomasa;
    private $diametro;
    private $verduras = 'No incluido';
    private $frutas = 'No incluido';
    private $estado;
    private $precio;

    // CONSTRUCTOR


       // Constructor

       public function __construct($id, $nombrepizza, $tipomasa, $diametro){

    
        $this->id = $id;
        $this->nombrepizza = $nombrepizza;
        $this->tipomasa = $tipomasa;
        $this->diametro = $diametro;
        
    }

    // METODOS


    // SETTER IMG

    public function setimagen($img) {

        echo('<div class="imagen">');
    
        
        echo('<img src="' . $this->img = $img . '" alt="">');
        
        
        echo('</div>');

    }


    // SETTER DATOS PIZZA

    public function Datospizza(){



        echo('<div class="datospizza">');
       

        echo('<ul>');
        echo('<li>');

        
        
        
        echo('ID: ' . '<span>' . $this->id . '</span>');

        
        
        echo('</li>');

        
        echo('<li class="nombrepizza">');

        
        
        echo('Nombre de la Pizza: ' . '<span>' . $this->nombrepizza . '</span>');

        
        
        echo('</li>');

echo('<li>');


        
        echo('Tipo Masa: ' . '<span>' . $this->tipomasa . '</span>');

        
        
        echo('</li>');

        echo('<li>');

        
        
        echo('Diametro: ' . '<span>' . $this->diametro . '</span>');

        
        
        echo('</li>');


        echo('</div>');
        
    }

    
    // METODO INGREDIENTES

    // SETTER INGREDIENTES

    // SETTER QUESO

    public function setCambiarqueso($queso){

        $this->queso = $queso;
    }

    // SETTER QUESO

    public function setCambiarcarne($carne){

        $this->carne = $carne;
    }

    // SETTER QUESO

    public function setCambiarpollo($pollo){

        $this->pollo = $pollo;
    }

    // SETTER QUESO

    public function setCambiarpescado($pescado){

        $this->pescado = $pescado;
    }

    // SETTER QUESO

    public function setCambiarvegetales($vegetales){

        $this->vegetales = $vegetales;
    }

    // SETTER QUESO

    public function setCambiarfrutas($frutas){

        $this->frutas = $frutas;
    }


//     public function Ingredientes(){


//         echo('<div class="datosingredientes">');
       

//         echo('<ul>');
//         echo('<li>');

        
        
        
//         echo('Queso: ' . '<span>' . $this->queso . '</span>');

        
        
//         echo('</li>');


//         echo('<li>');

        
        
        
//         echo('Queso: ' . '<span>' . $this->carne . '</span>');

        
        
//         echo('</li>');


        
//         echo('<li>');

        
        
//         echo('Pollo: ' . '<span>' . $this->pollo . '</span>');

        
        
//         echo('</li>');

// echo('<li>');


        
//         echo('Pescado: ' . '<span>' . $this->pescado . '</span>');

        
        
//         echo('</li>');

//         echo('<li>');

        
        
//         echo('Verduras: ' . '<span>' . $this->verduras . '</span>');

        
        
//         echo('</li>');


//         echo('<li>');

        
        
//         echo('Fruta: ' . '<span>' . $this->frutas . '</span>');

        
        
//         echo('</li>');
        

//         echo($this-> botoncomprar());


//         echo('</div>');


//     }


//     // METODO BOTON COMPRAR

//     public function botoncomprar() {

   

//         switch($this->estado){

//             case 'COMPRAR':


//             echo('<li class ="boton" style="background-color: red"> <a href="php/pedido.php?nombre=' . $this->nombrepizza . '&img=' . $this->img . '&estado=' . $this->estado . '">COMPRAR' . $this->precio . '</a> </li>');
//             break;

//             case 'AGOTADAS PAPU':

//             echo('<li class ="boton" style="background-color: black"> <a>AGOTADAS PAPU</a> </li>');
//             break;

//             case 'PIZZA YA PEDIDA, Volver a pedir':

         

//             echo('<li class ="boton" style="background-color: red"> <a href="php/pedido.php?nombre=' . $this->nombrepizza . '&img=' . $this->img . '&estado=' . $this->estado . '">PIZZA YA PEDIDA, Volver a pedir' . $this->precio . '</a> </li>');
//             break;



//         }
// }

  // SETTER PRECIO

public function setCambiarprecio($precio){

    $this->precio = $precio;


//     echo('<li>');

        
        
//         echo('Fruta: ' . '<span>' . $this->precio = $precio . '</span>');

        
        
//         echo('</li>');
// }

// public function estadoactual($nuevoestado){

//     $this->estado = $nuevoestado;
// }


}



} 

$pizzamargarita = new Pizza('01', 'Pizza Margarita', 'Masa Suave', '50cm');
$pizzamargarita-> setimagen('../../img/pizzamargarita.jpg');
$pizzamargarita-> setCambiarqueso('Queso parmesano');
$pizzamargarita-> setCambiarcarne('Motzarella');
$pizzamargarita-> setCambiarvegetales('Especias especiales');

$pizzamargarita-> setCambiarprecio('14,00euros');

echo('<pre>');
print_r($pizzamargarita);
echo('</pre>');


?>