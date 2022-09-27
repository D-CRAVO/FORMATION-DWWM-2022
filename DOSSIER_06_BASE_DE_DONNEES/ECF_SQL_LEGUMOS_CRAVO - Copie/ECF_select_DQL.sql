
--1
SELECT
	Id
	,Name
	,Variety
	,PrimaryColor
	,Lifetime
	,Fresh
FROM Vegetables
ORDER BY Name ASC
;


--2
SELECT 
	Name
	,SaleUnitPrice
	,COUNT(SA.Id) AS NbSales
	,SUM(SaleWeight) TotalWeight
FROM Vegetables
	NATURAL JOIN Sales AS SA
GROUP BY 
	Name
	,SaleUnitPrice
ORDER BY NbSales DESC
;


--3
SELECT 
	Name
	,PrimaryColor
FROM Vegetables
WHERE
	(Name LIKE '%on%' OR PrimaryColor = 'green')
	AND NOT (Name LIKE '%on%' AND PrimaryColor = 'green')
;

--4 
SELECT 
	Name
	,Variety
	,SUM(S1.SaleUnitPrice * S1.SaleWeight) AS TotalPriceVariety
	,ROUND(AVG(S2.SaleWeight),2) AS WeightAverage
	,MAX(S3.SaleWeight) AS MaxWeight
	,MAX(S3.SaleUnitPrice * S3.SaleWeight) AS MaxPrice
FROM Vegetables
	NATURAL JOIN Sales AS S1
	RIGHT JOIN Sales AS S2 ON S2.SaleID = S1.SaleId
	RIGHT JOIN Sales AS S3 ON S3.SaleID = S2.SaleId
GROUP BY 
	Name
	,Variety
;

	
	
	
	
	
	
	
	
	
	
	
	
	
	