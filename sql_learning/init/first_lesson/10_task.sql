-- find the total score and total number of customers for each country


use MyDatabase;

SELECT country, SUM(score) AS total_score, COUNT(first_name) as total_customers
FROM customers
GROUP BY country;