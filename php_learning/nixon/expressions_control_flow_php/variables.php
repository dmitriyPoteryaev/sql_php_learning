<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $a = 10;
    $b = $a;
    $b = 20;

    echo "a = $a, b = $b";

    echo "<br>";

    $c = 10;

    $d = &$c;

    $d = 20;

    echo "c = $c, d = $d"


    ?>
</body>

</html>