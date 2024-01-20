<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ejercicio 5</title>
</head>
<body>
  <?php
    /* Cortar strings */

    /* La funcion 'substr()' corta una cadena, se debe especificar como segundo parametro el indice inicial y como tercer parametro el numero de caracteres que desea retornar */

    $x = "Hola mundo!";
    echo substr($x, 5, 5);
    echo "<br><br>";

    /* Cortar la cadena hasta el final */

    /* Si omites el tercer parametro o el parametro de longitud, el rango ira hasta final */

    echo substr($x, 6);
    echo "<br><br>";

    /* cortar desde el final */

    /* Se deben utilizar indices negativos en el segundo parametro para comenzar desde el final del string */

    echo substr($x, -5, 3);
    echo "<br><br>";

    /* longitud negativa */

    /* Se utiliza una longitud negativa para especificar cuantos caracteres omitir, comenzando desde el final del string */

    echo substr($x, 5, -3); //mun
    echo "<br><br>";
  ?>
</body>
</html>