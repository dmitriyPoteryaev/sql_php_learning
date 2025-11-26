 <!DOCTYPE html>
 <html>
<body>
    <h1>Php with mysql. First lesson. Second Task</h1>

<a href="?status=paid">Paid</a>
<a href="?status=new">New</a>
<a href="?status=shipped">Shipped</a>
<a href="?status=canceled">Canceled</a>

    <?php 

      require_once __DIR__ . '/queries/get_filtered_orders.php'; 

      require_once __DIR__ . '/views/filtered_orders_table.php';  


     ?>


</body>
</html>