 <!DOCTYPE html>
 <html>
<body>
    <?php

    require __DIR__ . "/queries/query_sorted_order.php";
    require __DIR__ . "/views/sorted_orders_table.php"

?>

    <h1>Php with mysql. First lesson. Third Task</h1>

     <ul id="list_buttons">
    <li><button class="sort-btn" data-sort="amount">Сортировка по сумме</button></li>
    <li><button class="sort-btn" data-sort="created_at">Сортировка по дате</button></li>
    <li><button class="sort-btn" data-order="DESC">По убыванию</button></li>
    <li><button class="sort-btn" data-order="ASC">По возрастанию</button></li>
</ul>




</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="main.js"></script>

</html>