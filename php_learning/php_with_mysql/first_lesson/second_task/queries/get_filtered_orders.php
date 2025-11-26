<?php

require_once __DIR__ . '/../db/connection.php';

$all_statuses = ['paid', 'new', 'shipped', 'canceled'];

$current_status = $_GET['status'] ?? null;

$is_flag = in_array($current_status, $all_statuses, true);

$specific_query = $is_flag
    ? "SELECT * FROM new_orders WHERE status = '{$current_status}'"
    : "SELECT * FROM new_orders";

$query = mysqli_query($mysqli, $specific_query);

$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
