-- sort orders by quantity


use MyDatabase;

SELECT status, COUNT(status) as total_status
FROM new_orders
GROUP BY status
ORDER BY total_status DESC;