<?php

$host = '127.0.0.1';      // хост, где крутится MySQL (Docker проброшен на localhost)
$port = 3307;             // внешний порт MySQL из docker-compose / .env
$user = 'learn';          // MYSQL_USER
$pass = 'learn';          // MYSQL_PASSWORD
$db   = 'MyDatabase';       // MYSQL_DATABASE

// Пытаемся установить соединение с MySQL
$mysqli = mysqli_connect($host, $user, $pass, $db, $port);

// Проверяем, получилось ли подключиться
if (!$mysqli) {
    die('Ошибка подключения: ' . mysqli_connect_error());
}



// Если мы тут — значит подключение успешно
echo 'Подключение к БД успешно!<br>';

?>