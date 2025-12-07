<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

     // пример использования use в php. Удобно примнять, когда анонимная функция имеет доступ к внешним переменным 
     // Удобно при замыкании

     echo "Пример использования анонимной функции без use";


     $counter = 10;

     $fn_counter = function(){
        

        ++$counter;

     };

     $fn_counter();

     echo "</br>";


     echo $counter;

      echo  "</br>";

    echo  "Пример использования анонимной функции c use";

    echo  "</br>";


      $fn_counter1 = function() use(&$counter){
        

        ++$counter;

     };


          $fn_counter1();

          echo $counter;



?>
    
</body>
</html>