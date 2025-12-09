<?php

require_once __DIR__ . '/../db/connection.php';

$sql = "SELECT * FROM new_orders ORDER BY created_at DESC";

$result = mysqli_query($mysqli, $sql);

$orders = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>