TRUNCATE cars;
TRUNCATE owners CASCADE;
TRUNCATE brands CASCADE;


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
	,car_registration
	,car_owner_id
	,brand_id
)
VALUES
(12, 'Chevelle Concours', 'AA-123-AA', 1, 3)
,(16, 'A6 Break', 'BB-274-BB', 5, 1)
,(21, 'Corolla', 'CA-789-BA', 2, 5)
,(19, 'Monte Carlo', 'CC-546-FV', 4, 3)
,(27, '504', 'CG-274-ZG', 4, 4)
,(30, 'Q8', 'ER-355-GX', 3, 1)
,(28, '100 LS', 'FV-313-FT', 5, 1)
,(23, 'Hornet', 'DE-228-KS', 5, 2)
,(26, '3008', 'CF-614-PM', 5, 4)
;








