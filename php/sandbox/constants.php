<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constants</title>
</head>

<body>
  <?php
  $max_width = 980;

  define("MAX_WIDTH", 980);
  echo MAX_WIDTH;
  ?>
  <br>
  <?php //Can't change the value
  // MAX_WIDTH = 1;
  // echo MAX_WIDTH;
  ?>

  <?php //Can't redefine it
  // define("MAX_WIDTH", 980);
  // echo MAX_WIDTH;
  ?>

</body>

</html>