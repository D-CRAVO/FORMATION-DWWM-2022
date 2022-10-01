-- Requête d'origine avant modifications
/*
select name,SaleUnitPrice,SaleActive,count(SaleWeight)
from Vegetables
inner join sales
on sales.Saleld = Vegetables.id
group by name,SaleUnitPrice,SaleActive,SaleWeight
order by SaleActive asc;
*/

-- Requête modifiée avec résultat correct sur ma BDD
select name,SaleUnitPrice,count(Sales.Id) AS NbSales
from Vegetables
inner join Sales
on Sales.Id = Vegetables.Id
group by name,SaleUnitPrice
order by NbSales asc;