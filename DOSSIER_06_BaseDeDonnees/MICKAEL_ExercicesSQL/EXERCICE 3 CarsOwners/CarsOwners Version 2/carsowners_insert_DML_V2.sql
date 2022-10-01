TRUNCATE owners CASCADE;
TRUNCATE brands CASCADE;
TRUNCATE cars_owners CASCADE;
TRUNCATE cars CASCADE;


INSERT INTO owners
(
	owner_id
	,owner_lastname
	,owner_firstname
)
VALUES
(1, 'Petit', 'Annie')
,(2, 'Marsfall', 'Bénédicte')
,(3, 'Doe', 'John')
,(4, 'Bouchra', 'Amine')
,(5, 'Jones', 'Steeven')
;


INSERT INTO brands
(
	brand_id
	,brand_name
)
VALUES
(1, 'Audi')
,(2, 'AMC')
,(3, 'Chevrolet')
,(4, 'Peugeot')
,(5, 'Toyota')
;


INSERT INTO cars
(
	car_id
	,car_name
	,brand_id
)
VALUES
(12, 'Chevelle Concours', 3)
,(16, 'A6 Break', 1)
,(21, 'Corolla', 5)
,(19, 'Monte Carlo', 3)
,(27, '504', 4)
,(30, 'Q8', 1)
,(28, '100 LS', 1)
,(23, 'Hornet', 2)
,(26, '3008', 4)
;


INSERT INTO cars_owners
(
	car_id
	,car_owner_id
	,car_registration
)
VALUES
(12, 1, 'AA-123-AA')
,(16, 5, 'BB-274-BB')
,(21, 2, 'CA-789-BA')
,(19, 4, 'CC-546-FV')
,(27, 4, 'CG-274-ZG')
,(30, 3, 'ER-355-GX')
,(28, 5, 'FV-313-FT')
,(23, 5, 'DE-228-KS')
,(26, 5, 'CF-614-PM')
;











