-- SHOW STATIC VALUES

SELECT 123 AS STATIC_NUMBER;

use MyDatabase;

SELECT id,
first_name,
'New customer' AS customer_type
FROM customers;