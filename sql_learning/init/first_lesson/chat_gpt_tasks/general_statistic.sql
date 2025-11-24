-- retrieve general quantity of orders  and general amount


USE MyDatabase;


SELECT COUNT(*) as total_orders, SUM(amount) as total_amount
FROM new_orders;
