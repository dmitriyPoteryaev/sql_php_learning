<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type casting</title>
</head>
<body>

<?php

var_dump("10abc" == 10);

echo "<br>";

var_dump("0" == false);

echo "<br>";

var_dump("" == 0);

echo "<br>";

var_dump((bool) "false");

echo "<br>";

var_dump(  "123" + "7b" );

echo "<br>";

var_dump([] == false);

echo "<br>";

var_dump(null == "");

echo "<br>";

var_dump("0e123" == "0e456");

echo "<br>";

var_dump((int) true + (int) false);

echo "<br>";

?>
    
</body>
</html>