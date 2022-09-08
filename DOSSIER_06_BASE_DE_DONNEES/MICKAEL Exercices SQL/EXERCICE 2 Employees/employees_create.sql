DROP TABLE IF EXISTS employees
;

CREATE TABLE employees
(
	emp_id SERIAL
	,emp_lastname VARCHAR(50) NOT NULL
	,emp_firstname VARCHAR(50) NOT NULL
	,emp_salary INT NOT NULL
	,emp_hiredate DATE NOT NULL
	,emp_manager_id INT
	,PRIMARY KEY (emp_id)
)
;

ALTER TABLE employees
	ADD CONSTRAINT fk_employees_id FOREIGN KEY (emp_manager_id) REFERENCES employees(emp_id)
	ON UPDATE RESTRICT ON DELETE RESTRICT