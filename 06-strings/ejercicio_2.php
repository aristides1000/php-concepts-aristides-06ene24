<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings - 2</title>
</head>
<body>
  <?php
    /* Longitug de un string en PHP */

    /*
      La funcion strlen() en PHP devuelve la longitud de una cadena.
    */

    echo strlen("Hola mundo");

    echo "<br><br>";

    /* Recuento de palabras en PHP */

    /*
      la funcion str_word_count() de PHP cuenta el numero de palabras en un string.
    */
    echo str_word_count("Buenos dias, como estan?");

    echo "<br><br>";

    /* Buscar texto dentro de una cadena */

    /* La funcion PHP strpos() busca un texto especifico dentro de una cadena.

      Si se encruentra una coincidencia, la funcion devuelve la posicion del caracter de la primera coincidencia. si no se encuentra ninguna coincidencia, devolvera falso.
    */

    echo strpos("Bonito dia", "dia");
    echo "<br>";
    echo strpos("Maria Hernandez", "Perez");
  ?>
</body>
</html>