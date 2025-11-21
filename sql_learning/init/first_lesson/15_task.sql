-- Get the two most recent orders;

use MyDatabase;

SELECT *
FROM orders
ORDER BY order_date DESC
LIMIT 2;