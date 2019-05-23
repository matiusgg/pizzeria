
<?php

include_once('../app/models/Pizza.php');


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="ticket.php" method="post">
    <section>
    
    
    <article>
    div>
<h2>
<?php

// PODEMOS usar $_GET porque cuando nos vamos a una direccion con href, el GET seria como un REQUEST o un POST, en donde el enlace seria como un form, y el GET recibe la informacion de la anterior pagina, es decir, al final el enlace mediante GET recibe la informacion de la pagina anterior.

$nombreAnimal = $_GET['nombre'];
echo($nombreAnimal);
?>
 Te esta esperando
</h2>

<?php
$imagen = $_GET['img'];

// Como vemos pusimos el $_GET de imagen dentro de una variable, para despues hacer un echo de mostrar una imagen en donde reemplazamos la direccion por la direccion o la variable que contiene la propiedad de la imagen del objeto
echo('<img src="../' . $imagen . '">');

// o tambien
?>

<!-- <img src="</?php $imagen ?>" class="Foto"> -->




</div>

<div>

<label for="cantidadpizzas">
Pizzas Margaritas</label>

<input type="text" name="apellido" id="apellido" 
        placeholder="Cantidad" >

        <br>
      <button type="submit" name="envio">
          COMPRAR YA!!!
      </button>

</div>
    
    </article>


    </section>
    </form>
</body>
</html>