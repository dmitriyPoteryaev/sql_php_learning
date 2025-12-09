<?php

$host = '127.0.0.1';
$port = 3307;
$user = 'learn';
$pass = 'learn';
$db = 'MyDatabase';


$mysqli =  mysqli_connect($host, $user, $pass, $db, $port);


if(!$mysqli){

   echo 'Подключение не удалось ' . mysqli_connect_error();
}

   echo "Подключение удалось";

?>