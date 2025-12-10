<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // цикл while

    while ($i < 10) {

        echo "<br> $i";

        $i++;
    }

     echo "<br>";

      // цикл do while

    do{

    echo "<br> $j";

    $j++;

    }while($j < 10);


     echo "<br>";
     // цикл for

     for($k = 0; $k < 10; $k++){

        echo "<br> $k";
     }

         echo "<br>";

 $arr = [1, 2, 3];

foreach ($arr as $v) {
    echo "<br> $v";
}

echo "<br>";
var_dump($v);


    ?>

</body>

</html>