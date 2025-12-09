<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Вариант с elseif

    $a = 10;
    $b = 20;

    if ( $b < $a): echo "First condition";
   elseif ($b > $a): echo "Second condition";
   endif;

  $c = 20;

  $d = 100;

  
  // Вариант с else if
  echo "<br>";

  if ($d > $c){

    echo "First condition";
  } else if($d < $c){

    echo "Second condition";
  }


    ?>
</body>
</html>