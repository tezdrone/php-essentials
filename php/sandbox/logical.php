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
  $a = 4;
  $b = 3;

  if ($a > $b) {
    echo "a is larger than b";
  } else if ($a < $b) {
    echo "a is less than b";
  } else {
    echo "a and b are equal";
  }
  ?>
  <br>

  <?php //Only welcome new users
  $new_user = true;
  if ($new_user) {
    echo '<h1>Welcome!</h1>';
    echo '<p>We are so glad that you could join us!</p>';
  } ?>
  <br>

  <?php // Don't divide by zero
  $numerator = 20;
  $denomintator = 4;
  $result = 0;
  if ($denomintator > 0) {
    $result = $numerator / $denomintator;
  }
  echo "Result: {$result}";
  ?>

</body>

</html>