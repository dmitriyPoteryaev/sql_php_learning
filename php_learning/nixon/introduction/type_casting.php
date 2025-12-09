 <!DOCTYPE html>
 <html>
<body>
    <h1>Type casting</h1>
    <?php 
        $number = 1;

        echo ("Это число - ". gettype($number));

        echo "</br>";

        $string =  (string) $number;

        echo ("Это строка - ". gettype($string));
     ?>
</body>
</html>