<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static and closure </title>
</head>
<body>

<?php

function counter(){
    
    static $x = 0;


    return function() use(&$x){

        return ++$x;
    };
}

$counter1 = counter();
$counter2 = counter();

echo $counter1();
echo "<br>";
echo $counter1();
echo "<br>";
echo $counter1();
echo "<br>";
echo $counter1();
echo "<br>";


echo $counter2();
echo "<br>";
echo $counter2();

?>
    
</body>
</html>