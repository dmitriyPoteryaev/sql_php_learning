-- retrieve top 3 client 


use MyDatabase;

SELECT customer_name, SUM(amount) AS total_amount
FROM new_orders
GROUP BY customer_name
ORDER BY total_amount DESC
LIMIT 3;