-- retrieve info of how much money paid each client


use MyDatabase;


SELECT customer_name, SUM(amount) as total_amount
FROM new_orders
WHERE status != 'canceled'
GROUP BY customer_name;