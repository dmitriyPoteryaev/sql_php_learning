<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clouser. Mixed capture</title>
</head>

<body>

    <?php

    $x = 10;
    $y = 10;

    $fn = function () use ($x, &$y) {

        ++$x;
        ++$y;

        return  "x=$x y=$y\n";
    };

    echo $fn();
    echo "<br>";
    echo $fn();
    echo "<br>";
    echo "global x=$x, global y=$y";

    ?>

</body>

</html>