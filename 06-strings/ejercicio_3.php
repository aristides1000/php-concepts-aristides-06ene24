<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ejercicio 3</title>
</head>
<body>
  <?php
    /* La funcion "strtoupper" devuelve la cadena en mayuscula */

    $x = "Hola mundo!";
    echo strtoupper($x);
    echo "<br>";

    /* La funcion "strtolower()" devuelve la cadena en minuscula */

    echo strtolower($x);
    echo "<br>";

    /* La funcion "str_replace()" de PHP reemplaza algunos caracteres con otros caracteres en un string.*/

    echo str_replace("mundo", "Maria", $x);
    echo "<br>";

    /* invertir un string */

    /* La funcion strrev() invierte una cadena */

    echo strrev($x);
    echo "<br>";

    /* Elminar espacios en blanco */

    /* La funcion trim() elimina cualquier espacio en blanco desde el principio o el final: */

    $y = "     Hola Mundo     ";
    echo trim($y);
    echo "<br>";

    /* convertir un string en un array */

    /*
      La funcion PHP explode() divide un string en un array.
      El primer parametro de la funcion explode() representa al "separador". El separador especifica donde dividir a la cadena.
    */

    $z = explode(" ", $x);

    print_r($z);
  ?>
</body>
</html>