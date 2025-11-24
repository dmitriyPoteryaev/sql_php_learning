-- retrieve quantity orders with each status 


use MyDatabase;

SELECT status, COUNT(*) as quantity_orders
FROM new_orders 
GROUP BY status;