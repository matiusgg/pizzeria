<?php
include_once('app/models/Pizza.php');




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <h1>
    ESCOGE TU PIZZA Y DISFRUTA DE LA MEJOR PIZZA
    </h1>

    <section>
    
  
  
  <?php

  // PIZZAS
  foreach($objetos AS $valor) {
    
    echo('<article>');

    // if(isset($_GET['estadoactual']) == 'PIZZA YA PEDIDA, Volver a pedir') {

    //   $valor-> estadoactual('PIZZA YA PEDIDA, Volver a pedir');
      
    // } 
    echo($valor-> imagen());
    echo($valor-> Datospizza());
    echo($valor-> getIngredientes());
  
    
    echo('</article>');
  }


// ?>

// <!-- <?php


// $calculocantidad = $_REQUEST['cantidad'];

// if($calculocantidad != "") {

//     echo(calculo());
// }

// ?> -->
  
  

    
    </section>
</body>
</html>