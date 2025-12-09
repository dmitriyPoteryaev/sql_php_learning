<table border="1">
    <tr>
        <th>id</th>
        <th>customer name</th>
        <th>status</th>
        <th>amount</th>
        <th>created_at</th>
    </tr>

    <?php foreach ($result as $order): ?>
        <tr>
            <td><?= $order['id'] ?></td>
            <td><?= $order['customer_name'] ?></td>
            <td><?= $order['status'] ?></td>
            <td><?= $order['amount'] ?></td>
            <td><?= $order['created_at'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
