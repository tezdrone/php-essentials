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
  <?php $numbers = array(8, 23, 15, 42, 16, 4) ?>

  Count: <?php echo count($numbers); ?><br>
  Max Value: <?php echo max($numbers); ?><br>
  Min Value: <?php echo min($numbers); ?><br>
  <br>
  <pre>
  Sort: <?php sort($numbers);
        print_r($numbers); ?>
  </pre><br>
  <pre>
  Reverse Sort: <?php rsort($numbers);
                print_r($numbers); ?>
  </pre><br>

  Implode: <?php echo $num_string = implode(" * ", $numbers); ?><br>
  Explode: <?php print_r(explode(" * ", $num_string)); ?><br>
  <br>

  15 in array?: <?php echo in_array(15, $numbers) ?><br>
  19 in array?: <?php echo in_array(19, $numbers); ?><br>

</body>

</html>