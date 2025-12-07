<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

      echo  "Пример вызова функции с типизацией аргументов";

      echo  "</br>";

    $a = 5;

    $b = 4;

    $user = "Dima";

      function sum(int $a, int $b){

        return $a + $b;
      }

      echo sum($a, $b);

     echo  "</br>";

      echo  "Пример вызова функции с заранее заданным аргументом";

      echo  "</br>";

    function Hello(string $user = "Guest"){


      echo 'Hello ' . $user;

    }


    Hello($user);


     echo  "</br>";


     // комментарий к коду ниже.  Нужно всмпонить, что в js примитивы передаются по значению, а не по ссылке.
     // Поэтому когда мы хотим с помощью кода снизу изменить переменную у нас это не получится. Поскольку в функцию передаётся value по ссылке, а в функции
     // определно уже другое value. Поэтому value в глобальной области видимости не меняется
      echo  "Пример вызова функции. У функции в php нет доступа к внешним переменным";

      echo  "</br>";
 
    function addOne(int $value1){

      ++$value1;

    }

    $value1 = 5;

    addOne($value1);


    echo $value1;

    echo  "</br>";

      // но в php есть функция принудительно передавать передавать примитивы как объекты

       echo  "Пример вызова функции. Передача аргументов по ссылке. Call by reference";

      echo  "</br>";
    
   function addOne1(&$value1){


      ++$value1;


    }

    addOne1($value1);


    echo $value1;

     echo  "</br>";

     
       echo  "Пример вызова функции. Определение примитива как глобальную переменную";

      echo  "</br>";


      $value2 = 12;

     function addOne3(){

           global $value2;

           ++$value2;

     }
   
     addOne3();

     echo $value2;


    ?>
</body>
</html>