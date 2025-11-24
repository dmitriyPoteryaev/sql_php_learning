-- Retrieve all orders sorted by date (newest first)



use MyDatabase;


SELECT customer_name, created_at
FROM new_orders
ORDER BY created_at DESC;