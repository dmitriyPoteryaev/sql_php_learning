-- retriev all customers and sort the results by the country and then by the highest score



USE MyDatabase;

SELECT * FROM customers
ORDER BY score DESC,
country ASC;