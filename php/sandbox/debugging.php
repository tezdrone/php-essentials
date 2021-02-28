<?php
ini_set("display_errors", "On");
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Debugging</title>
</head>

<body>

  <pre>
    <?php

    $number = 99;
    $string = "Bug?";
    $array = [1 => "Homepage", 2 => "About Us", 3 => "Services"];

    var_dump($number);
    echo "<br>";
    var_dump($string);
    echo "<br>";
    var_dump($array);
    echo "<br>";

    ?>
  </pre>
  <br>
  <pre>
    <?php
    print_r(get_defined_vars())
    ?>
  </pre>
  <?php
  function say_hello_to($word)
  {
    echo "Hello {$word}!<br>";
    var_dump(debug_backtrace());
  }

  say_hello_to("Everyone");
  ?>




</body>

</html>