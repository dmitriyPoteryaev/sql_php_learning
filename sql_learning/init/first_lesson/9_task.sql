-- find the total scrore for each country

use MyDatabase;


SELECT country, SUM(score) AS total_score, first_name
FROM customers
GROUP BY country;