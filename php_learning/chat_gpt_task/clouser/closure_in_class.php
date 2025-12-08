<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class A{

private $x;


public function counter(){


    return function() {

         return ++$this->x;
    };
}
}

$a = new A();
$a1 = new A();

$counter = $a->counter();

$counter1 = $a1->counter();

echo $counter();

echo $counter();

echo $counter1();


?>
    

</body>
</html>