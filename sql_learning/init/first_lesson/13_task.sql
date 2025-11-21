-- retrieve the top 3 customers with the highest scores

-- retrieve the top 3 customers with the highest scores


USE MyDatabase;

SELECT *
FROM customers
ORDER BY score DESC
LIMIT 3;