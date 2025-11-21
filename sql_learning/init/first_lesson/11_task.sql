-- find the average score for each country considering only customers with a score not equal to 0
-- And return only those countries with an average score greater than 430


use MyDatabase;


SELECT country, AVG(score) as average_score, COUNT(country) as total_country
FROM customers
WHERE score != 0
GROUP BY country
HAVING average_score > 430 ;