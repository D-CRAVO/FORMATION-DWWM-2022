TRUNCATE Sales RESTART IDENTITY;
TRUNCATE Vegetables RESTART IDENTITY CASCADE;

INSERT INTO Vegetables
( 
	Id
	,Name
	,Variety
	,PrimaryColor
	,LifeTime
)
VALUES
(1, 'apple', 'golden', 'green', 90)
,(2, 'banana', 'cavendish', 'yellow', 10)
,(3,'blueberry', 'bluecrop', 'green',8)
,(4, 'cabbage', 'broccoli', 'green', 60)
,(5, 'carrot', 'de Colmar', 'orange', 60)
,(6, 'cherry', 'moreau', 'darkred',20)
,(7, 'coconut', 'palmyre', 'brown', 30)
,(8, 'grape', 'aladin', 'green', 10)
,(9, 'kiwi', 'hayward', 'green', 40)
,(10, 'lemon', 'eureka', 'green', 30)
,(11, 'onion', 'Stuttgart', 'white', 90)
;

INSERT INTO Sales
(
	Id
	,SaleId
	,SaleDate
	,SaleWeight
	,SaleUnitPrice
	,SaleActive
)
VALUES
(1, 1, '2022-09-22', 1, 2.5, 1)
,(2, 2, '2022-09-22', 2, 3.99, 1)
,(3, 3, '2022-09-22', 3, 2.99, 1)
,(4, 4, '2022-09-22', 4, 1.49, 1)
,(5, 5, '2022-09-22', 5, 1.59, 1)
,(6, 6, '2022-09-22', 4, 1.99, 1)
,(7, 7, '2022-09-22', 3, 3.95, 1)
,(8, 8, '2022-09-22', 2, 1.95, 1)
,(9, 9, '2022-09-22', 1, 2.45, 1)
,(9, 10, '2022-09-22', 2, 2.45, 1)
;

