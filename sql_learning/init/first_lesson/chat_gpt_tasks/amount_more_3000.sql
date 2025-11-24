-- retrieve all customers are having amount more 3000



USE MyDatabase;

SELECT customer_name, SUM(amount) AS total_amount
FROM new_orders
GROUP BY customer_name
HAVING total_amount > 3000;