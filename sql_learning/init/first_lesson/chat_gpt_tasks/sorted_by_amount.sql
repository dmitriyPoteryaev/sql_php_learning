-- sort orders by amount

use MyDatabase;

SELECT status, SUM(amount) AS total_amount
FROM new_orders
GROUP BY status
ORDER BY total_amount DESC;