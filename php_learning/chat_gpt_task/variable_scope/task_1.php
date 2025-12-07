<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
    <?php

    // решение - нужно добавить амперсант, чтобы был доступ к примитивам через ссылку
$counter = 0;

$fn = function() use (&$counter) {
    $counter++;
    return $counter;
};

echo $fn() .  "</br>"; 
echo $fn() .  "</br>"; 


    ?>
</body>
</html>