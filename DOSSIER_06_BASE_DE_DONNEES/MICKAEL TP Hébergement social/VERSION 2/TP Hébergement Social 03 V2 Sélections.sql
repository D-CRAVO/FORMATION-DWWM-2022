SELECT 
resident_id,
person_firstname,
person_lastname,
date_arrival,
person_birthdate
FROM residents
INNER JOIN people ON resident_id = person_id
WHERE date_leave IS NULL 
ORDER BY person_birthdate
;