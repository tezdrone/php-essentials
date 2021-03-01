<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Loops: While</title>
</head>

<body>
  <?php

  $count = 0;
  while ($count <= 10) {
    if ($count % 2) {
      echo "Odd, ";
    } else {
      echo $count . ", ";
    }
    $count++; //Increment by 1
  }
  ?><br>
  Count:<?php echo $count ?>


</body>

</html>