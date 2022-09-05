drop procedure if exists create_resident;

-- procédure stockée
CREATE OR REPLACE PROCEDURE create_resident 
(
	person_id INT
	,person_firstname VARCHAR(50)
	,person_lastname VARCHAR(100)
	,person_birthdate DATE
	,date_arrival TIMESTAMP
	,date_leave TIMESTAMP
)
LANGUAGE plpgsql
AS $$
BEGIN 

INSERT INTO people
(
	person_id
 	,person_lastname
	,person_firstname
	,person_birthdate
	,person_role_id
)
VALUES
(person_id, person_lastname, person_firstname, person_birthdate, 1)
;

INSERT INTO residents
(
	person_id
	,resident_date_arrival
)
VALUES
(person_id, resident_date_arrival)
;

END
;
$$

