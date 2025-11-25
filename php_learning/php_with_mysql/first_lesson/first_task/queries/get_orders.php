<?php

require_once __DIR__ . '/../db/connection.php';

$current_status = "paid";

$sql = "SELECT * FROM new_orders ORDER BY created_at DESC";

$sql1 = "SELECT * FROM new_orders WHERE status = " . $current_status;

$result = mysqli_query($mysqli, $sql);

$orders = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>