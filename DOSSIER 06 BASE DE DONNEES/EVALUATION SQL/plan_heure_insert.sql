
TRUNCATE manufacturers RESTART IDENTITY CASCADE;
TRUNCATE planes RESTART IDENTITY;


INSERT INTO manufacturers
(
	plane_maker
)
VALUES
('AIRBUS')
,('BOEING')
,('Bombardier')
,('Dassault')
,('Cessna')
;

INSERT INTO planes
(
	plane_maker_id
	,plane_reference
	,plane_capacity
	,plane_autonomy
	,plane_speed
	,plane_date
)
VALUES
(1, 'A300', 290, 7500, 900, '1974-05-23')
,(1, 'A320', 180, 5000, 900, '1988-04-18')
,(1, 'A350', 440, 11800, 920, '2015-01-15')
,(1, 'A380', 300, 15200, 903, '2007-10-15')
,(2, '717', 125, 9000, 890, '1999-10-12')
,(2, '737', 200, 14800, 920, '1968-02-10')
,(2, '747', 3500, 10500, 900, '1970-01-22')
,(2, '777', 270, 16500, 980, '1995-06-07')
,(3, 'C3500', 10 ,6297, 1025, '2004-01-12')
,(3, 'G7500', 19, 13705, 1150, '2014-10-20')
,(4, 'F2000', 12, 5500, 851, '1993-03-04')
,(4, 'F8X', 14, 11945, 1100, '2015-02-06')
,(5, 'CJ1', 5, 2200, 650, '1991-04-29')
,(5, 'XLS', 10, 3600, 805, '1998-07-29')
;












