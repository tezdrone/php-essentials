<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions: Default Argument Values</title>
</head>

<body>
  <?php

  function paint($room = "Office", $color = "Red")
  {
    return "The color of the {$room} is {$color}. <br>";
  }

  echo paint("Bedroom", "Blue");

  ?>



</body>

</html>