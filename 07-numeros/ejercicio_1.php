<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ejercicio 1</title>
</head>
<body>
  <?php
    /* Infinito en PHP */

    /* Un valor numerico mayor que PHP_FLOAT_MAX se considera infinito */

    /* PHP tiene las siguientes funciones para saber si un numero es finito o infinito
      - is_finite()
      - is_infinite()

      sin embargo la funcion PHP var_dump() devuelve el valor y el tipo de datos
    */

    $x = 1.9e411;
    var_dump($x);
    echo "<br><br>";

    /* PHP NaN */

    /* NaN significa Not a Number o no es un numero */

    /* NaN Se utiliza para operaciones matematicas imposibles */

    /* La funcion en PHP para comprobar si un valor no es un numero es:

    - is_nan()
    */

    /* Aunque tambien se puede utilizar la funcion var_dump() */

    $x = acos(8);
    var_dump($x);
    echo "<br><br>";

    /* string con numeros */

    /* La funcion PHP is_numeric() se puede utilizar para determinar si una variable es numerica. La funcion devuelve verdadero si la variable es un numero o una cadena numerica, falso en caso contrario */

    $x = 5985;
    var_dump(is_numeric($x));
    echo "<br><br>";

    $x = "5985";
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo "<br><br>";

    $x = "Hola";
    var_dump(is_numeric($x));
    echo "<br><br>";

    /* Conversion de strinmg y floats en integers */

    /* Las funciones (int), (integer) e intval() se utilizan para convertir un valor en un numero entero. */

    //transformar un float en un integer

    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br><br>";

    // transformar string a int

    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
  ?>
</body>
</html>