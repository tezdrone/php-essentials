<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pointers</title>
</head>

<body>
  <?php
  $ages =  [4, 8, 15, 16, 23, 42];

  //current: current pointer value
  echo "1: " . current($ages) . "<br>";

  //next: move the pointer forward
  //similar to using 'continue' inside a lopp
  next($ages);
  echo "2: " . current($ages) . "<br>";

  next($ages);
  next($ages);
  echo "3: " . current($ages) . "<br>";

  //prev: move the pointer backwards
  prev($ages);
  echo "4: " . current($ages) . "<br>";

  //reset: move the pointer to the first element
  reset($ages);
  echo "5: " . current($ages) . "<br>";

  //end: move the pointer to the end
  end($ages);
  echo "6: " . current($ages) . "<br>";

  next($ages);
  echo "7: " . current($ages) . "<br>";

  ?>

  <br>

  <?php
  reset($ages);
  while ($age = current($ages)) {
    echo $age . ", ";
    next($ages);
  }
  ?>

</body>

</html>