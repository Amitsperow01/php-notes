<h2>This is test page...</h2>
<?php 
require_once("config.php");








/*

join in SQL:
SELECT * FROM table1 INNER JOIN table2 ON table1.id=table2.id
SELECT * FROM left_table LEFT JOIN right_table ON left_table.id=right_table=id
SELECT * FROM left_table RIGHT JOIN right_table ON left_table.id=right_table.id
SELECT * FROM table1 JOIN table2 ON table1.id = table2.id


// for union
SELECT * FROM table1
UNION
SELECT * FROM table2


// sub queries
SELECT name, marks FROM sameTable
WHERE marks > (SELECT AVG(marks) FROM sameTable)





for alias table name:
SELECT * FROM table1 as t1 INNER JOIN table2 as t2 ON t1.id=t2.id



studentname  city rollNumber
st1          sarD  1
st2          sarD  2
st3          sarD  3


select city from table GROUP BY city 

For asking question:
commit
rollback


TRUNCATE TABLE table_name //  this method delete all the data inside table but does not delete tha entire table

*/ 



/*

Rought Work:
SELECT * FROM salesman

SELECT DISTINCT FROM table_name; 
SELECT COUNT(DISTINCT Country) FROM table_name;
SELECT Count(*) AS DistCountry FROM (SELECT DISTINCT Country FROM table_name);
SELECT * FROM table_name WHERE name='Rohit';
SELECT column1, column1...
FROM table_name
WHERE condition

SELECT * 
FROM table_name
WHERE CustomerId > 80

SELECT column1, column2...
FROM table_name
ORDER BY column1, column2.. ASC|DESC

SELECT * 
FROM table_name
ORDER BY City DESC

SELECT * 
FROM table_name
ORDER BY City DESC;

SELECT * 
FROM table_name
ORDER BY Country, CustomerName...

SELECT * 
FROM table_name
ORDER BY Country ASC, CustomerName DESC

SELECT *
FROM Customers
WHERE Country = 'Spain' AND CustomerName LIKE 'G%';

SELECT *
FROM table_name
WHERE Condition1 AND Condition2 AND Condition3... 

SELECT *
FROM Customers
WHERE Country = 'Germany'
AND City = 'Berlin'
AND PostalCode > 12000;

SELECT * 
FROM Customers
WHERE Country = 'Spain'
AND (CustomerName LIKE 'G%' OR CustomerName LIKE 'R%');

SELECT *
FROM Customers
WHERE Country = 'Germany' OR Country = 'Spain';

SELECT column1, column2
FROM table_name
WHERE Condition1 OR Condition2 OR Condition3...

SELECT *
FROM Customers
WHERE City = 'Berlin' 
OR CustomerName LIKE 'G%'
OR Country = 'Norway';

SELECT * 
FROM Customers
WHERE Country = 'Spain' AND (CustomerName LIKE 'G%' OR CustomerName LIKE 'R%')

SELECT * 
FROM Customers
WHERE NOT Country = 'Spain'

SELECT column1, column2
FROM table_name
WHERE NOT Condition;

SELECT * 
FROM Customers
WHERE CustomerName NOT LIKE 'A%';

SELECT * 
FROM Customers
WHERE CustomerId NOT BETWEEN 10 AND 60;

SELECT * 
FROM Customers
WHERE City NOT IN ('Paris', 'London');

------------------
SELECT *
FROM Customers
WHERE NOT CustomerId > 50;

We can also write like (NOT Operator NOT, !):
SELECT * 
FROM Customers
WHERE CustomerId !> 50;
------------------
------------------
SELECT * 
FROM Customers
WHERE NOT CustomerId < 50;

SELECT * 
FROM Customers
WHERE CustomerId !< 50;
------------------
------------------
INSERT INTO table_name (column1, column2, column3)
VALUES (value1, value2, value3)

INSERT INTO table_name
VALUES (value1, value2, value3)

INSERT INTO table_name (column1, column2, column3)
VALUES (value1, value1, value1), 
(value2, value2, value2),
(value3, value3, value3);
------------------
------------------
SELECT column_name
FROM table_name
WHERE column_name IS NULL;

SELECT column_name
FROM table_name
WHERE column_name IS NOT NULL;
------------------

SELECT CustomerName, ContactName, Address
FROM table_name
WHERE address IS NOT NULL;

UPDATE table_name
SET column1 = value1, column2 = value2...
WHERE condtions;

DELETE FROM 
table_name WHERE condition;

DELETE FROM Customers 
WHERE CustomerName = "Rohit";

DROP TABLE table_name;

SELECT * 
FROM table_name
WHERE condition
LIMIT 3;

SELECT MIN(Price) 
FROM table_name

SELECT MAX(Price)
FROM table_name

SELECT MIN(column_name)
FROM table_name
WHERE condition;

SELECT MAX(column_name)
FROM table_name
WHERE condition;

SELECT MAX(Price) AS MaxumumPrice 
FROM table_name
WHERE condition;

SELECT MIN(Price) AS MinimumPrice
FROM table_name
WHERE condition;

SELECT COUNT(*)
FROM Products;

SELECT COUNT(column_name)
FROM table_name
WHERE condition;

SELECT COUNT(Product)
FROM Products
WHERE Price > 20;

SELECT COUNT(DISTINCT Price)
FROM table_name;

SELECT SUM(Quantity)
FROM OrderDetails;

SELECT SUM(column_name)
FROM table_name
WHERE condition;

SELECT SUM(Quantity)
FROM OrderDetails
WHERE ProductId = 11;

SELECT SUM(Quantity) AS SumQuantity
FROM table_name

SELECT SUM(Price * Quantity)
FROM table1 LEFT JOIN table2
ON table1.PriductId = table2.ProductId;

SELECT AVG(Price)
FROM table_name;

SELECT AVG(column_name)
FROM table_name
WHERE condition;

SELECT AVG(Price)
FROM Products
WHERE ProductId = 1;

SELECT * 
FROM table_name
WHERE price > (SELECT AVG(price) FROM table_name);

SELECT *
FROM table_name
WHERE CustomerName LIKE 'b%';

SELECT column1, column2..
FROM table_name
WHERE column LIKE pattern;

SELECT * 
FROM table_name
WHERE CustomerName LIKE 'a%' AND CustomerName LIKE 'b%';

SELECT column_name
FROM table_name
WHERE condition
(SELECT column_name FROM table_name WHERE condition)

SELECT Price FROM
table_name
WHERE Price > (SELECT AVG(Price) FROM table_name)






*/ 





?>


<!-- <table border="1" cellspacing="0">
    <tr>
        <td>Quick</td>
        <td colspan="2">Brown Fox</td>
        <td>jumps</td>
    </tr>
    <tr>
        <td rowspan="3">Over the</td>
        <td>lazy</td>
        <td>dog</td>
        <td>and</td>
    </tr>
    <tr>
        <td>then</td>
        <td>it</td>
        <td>fall</td>
    </tr>
    <tr>
        <td colspan="3">precy to a lion</td>
    </tr>
</table> -->


<!-- <table border="1" cellspacing='0'>
    <tr>
        <td>Column 1</td>
        <td>Column 2</td>
        <td>Column 3</td>
    </tr>
    <tr>
        <td rowspan="2">Row 1 Cell 1</td>
        <td>Row 1 Cell 2</td>
        <td>Row 1 Cell 3</td>
    </tr>
    <tr>
        <td>Row 2 Cell 2</td>
        <td>Row 2 Cell 3</td>
    </tr>
    <tr>
        <td colspan="3">Row 3 Cell 1</td>
    </tr>
</table> -->



<!-- for JSON -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div id="load_data"></div>
<script>
    $(document).ready(function(){
        $.ajax({
            url: "https://jsonplaceholder.typicode.com/posts/1",
            type: "GET",
            success: function(data) {
                // console.log(data);
                $("#load_data").append(data.id + "<br>" + data.title + "<br>" + data.body);
            }
        });
    });
</script> -->



<?php 

// $a = ["One" => "First", "Two" => "Second", "Three" => "Third"];

// // echo "<pre>";
// // print_r($a);

// $encode = json_encode($a); // use for arrya into a json object

// echo $encode;
// echo "<br><br>";

// $test = json_decode($encode); // use for json object into arrya object

// var_dump($test);

?>




