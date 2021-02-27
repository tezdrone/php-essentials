<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Arrays</title>
</head>

<body>
  <?php
  $assoc = array(
    "first_name" => "Ben",
    "last_name" => "Mitchell"
  );
  ?>

  <?php echo $assoc["first_name"]; ?><br>
  <?php echo $assoc["last_name"]; ?><br>

  <?php $assoc["first_name"] = "Larry"; ?><br>
  <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br>

</body>

</html>