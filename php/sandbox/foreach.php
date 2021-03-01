<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops: Foreach</title>
</head>

<body>
  <?php
  $ages = array(4, 8, 15, 16, 23);
  foreach ($ages as $age) {
    echo "Age: {$age}<br>";
  }
  ?>
  <br>
  <?php
  $person = [
    "first_name" => "Ben",
    "last_name" => "Mitchell",
    "address" => "123 Street",
    "city" => "Taupo",
    "state" => "Waikato",
    "postcode" => "1234",
  ];

  foreach ($person as $attribute => $data) {
    $attr_nice = ucwords(str_replace("_", " ", $attribute));
    echo "{$attr_nice}: {$data}<br>";
  }
  ?>

  <br>

  <?php
  $prices = [
    "Brand New Computer" => 2000,
    "1 month of lynda.com" => 25,
    "Learning PHP" => null
  ];

  foreach ($prices as $item => $price) {
    echo "{$item}: ";
    if (is_int($price)) {
      echo "$" . $price;
    } else {
      echo "Priceless";
    }
    echo "<br>";
  }

  ?>

</body>

</html>