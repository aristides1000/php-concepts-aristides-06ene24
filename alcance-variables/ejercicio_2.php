<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alcance de las variables - ejercicio 2</title>
</head>
<body>
  <?php
    /* Una variable declarada de una funcion tiene un alcance local y solo se puede acceder a ella dentro de esa funcion */

    function myTest() {
      $x = 5; // alcance local

      echo "<p>El valor de la variable x dentro de la funcion es: $x</p>";
    }
    myTest();

    // usando la variable fuera de la funcion se generara un error

    echo "<p>El valor de la variable x fuera de la funcion es: $x</p>";
  ?>
</body>
</html>