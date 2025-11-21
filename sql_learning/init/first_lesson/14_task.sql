-- retrieve the lowest 2 customers based on the score


USE MyDatabase

SELECT *
FROM customers
ORDER BY score ASC
LIMIT 2;