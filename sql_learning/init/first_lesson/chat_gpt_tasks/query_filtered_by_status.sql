-- retrieve orders with status = paid and sorted by amount

use MyDatabase;

SELECT *
FROM new_orders
WHERE status = 'paid'
ORDER BY amount DESC;

