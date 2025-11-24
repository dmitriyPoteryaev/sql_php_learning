-- retrieve amount by each status


use MyDatabase;


SELECT status, SUM(amount) as total_amount
FROM new_orders
GROUP BY status;