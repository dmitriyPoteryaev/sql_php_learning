<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main clouser in php</title>
</head>

<body>
    <?php
    $x = 10;

    $fn = function () use ($x) {
        return ++$x;
    };

    echo $fn();
    echo $fn();
    ?>
</body>

</html>