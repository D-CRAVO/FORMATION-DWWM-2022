DROP TABLE IF EXISTS planes;
DROP TABLE IF EXISTS manufacturers;

CREATE TABLE manufacturers
(
	plane_maker_id SERIAL
	,plane_maker VARCHAR(50) NOT NULL
)
;

CREATE TABLE planes
(
	plane_reference CHAR(5) NOT NULL
	,plane_capacity INT NOT NULL
	,plane_autonomy INT NOT NULL
	,plane_speed INT NOT NULL
	,plane_date DATE NOT NULL
	,plane_maker_id INT NOT NULL
)
;

ALTER TABLE manufacturers
	ADD PRIMARY KEY (plane_maker_id)
;

ALTER TABLE planes
	ADD PRIMARY KEY (plane_reference)
	,ADD CONSTRAINT fk_manufacturers_planes FOREIGN KEY (plane_maker_id) REFERENCES manufacturers(plane_maker_id)
;
