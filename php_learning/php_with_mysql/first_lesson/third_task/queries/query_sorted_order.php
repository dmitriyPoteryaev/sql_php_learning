<?php

require __DIR__ . "/../connection/connection.php";

$allowed_columns = ['amount', 'created_at'];
$allowed_orders = ['ASC', 'DESC'];

$current_sort  = $_GET['sort'] ?? 'created_at';
$current_order = $_GET['order'] ?? 'DESC';

$current_sort  = in_array($current_sort, $allowed_columns) 
                 ? $current_sort 
                 : 'created_at';

$current_order = in_array(strtoupper($current_order), $allowed_orders) 
                 ? strtoupper($current_order) 
                 : 'DESC';

$query_string = "SELECT * FROM new_orders ORDER BY $current_sort $current_order";

$query = mysqli_query($mysqli, $query_string);

$result = mysqli_fetch_all($query, MYSQLI_ASSOC);


?> 