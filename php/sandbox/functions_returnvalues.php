<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions: Return Values</title>
</head>

<body>
  <?php
  function add($val1, $val2)
  {
    return $val1 + $val2;
  }

  $result = add(3, 4);
  echo $result;
  ?>
  <br>
  <?php //Chinese Zodiac Function
  function chinese_zodiac($year)
  {
    switch (($year - 4) % 12) {
      case 0:
        return 'Rat';
      case 1:
        return 'Ox';
      case 2:
        return 'Tiger';
      case 3:
        return 'Rabbit';
      case 4:
        return 'Dragon';
      case 5:
        return 'Snake';
      case 6:
        return 'Horse';
      case 7:
        return 'Goat';
      case 8:
        return 'Monkey';
      case 9:
        return 'Rooster';
      case 10:
        return 'Dog';
      case 11:
        return 'Pig';
    }
  }

  echo chinese_zodiac(2000);
  echo "2024 is the year of the " . chinese_zodiac(2024) . "!"
  ?>

  <br>

</body>

</html>