<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $txt = "musica";
    echo "Amo la $txt!<br>";

    $txt2 = "playa";
    echo "Amo la " . $txt2 . "!<br>";

    $x = 5;
    $y = 4;
    echo $x + $y;
    echo "<br>";

    // Obtener el tipo de dato

    $x = 5;
    var_dump($x);
    echo "<br>";

    // Diferentes tipos de datos

    var_dump(5);
    echo "<br>";
    var_dump(-7);
    echo "<br>";
    var_dump("John");
    echo "<br>";
    var_dump(3.14);
    echo "<br>";
    var_dump(true);
    echo "<br>";
    var_dump(false);
    echo "<br>";
    var_dump([2, 3, 56]);
    echo "<br>";
    var_dump(NULL);
    echo "<br>";

    // Asignar multiples valores

    $x = $y = $z = "fruta";
  ?>
</body>
</html>