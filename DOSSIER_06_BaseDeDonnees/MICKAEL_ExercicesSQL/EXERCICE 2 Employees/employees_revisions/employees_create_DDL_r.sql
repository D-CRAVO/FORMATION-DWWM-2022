DROP TABLE IF EXISTS employees
;

CREATE TABLE employees
(
	emp_id SERIAL
	,emp_lastname VARCHAR(50) NOT null
	,emp_firstname VARCHAR(50) NOT null
	,emp_salary INT NOT null
	,emp_hiredate DATE NOT null
)
;

ALTER TABLE employees
	ADD PRIMARY KEY (emp_id)
	,ADD COLUMN emp_manager_id INT null
	,ADD CONSTRAINT fk_employees_manager FOREIGN KEY (emp_manager_id) REFERENCES employees(emp_id)
;