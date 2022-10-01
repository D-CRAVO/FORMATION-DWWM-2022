DROP TABLE IF EXISTS employees;

CREATE TABLE employees
(
	emp_id SERIAL
	,emp_lastname VARCHAR(50) NOT NULL
	,emp_firstname VARCHAR(50) NOT NULL
	,emp_salary INT NOT NULL
	,emp_hiredate DATE
)
;

ALTER TABLE employees
	ADD PRIMARY KEY (emp_id)
	,ADD COLUMN emp_manager_id INT NULL
	,ADD CONSTRAINT fk_employees FOREIGN KEY (emp_manager_id) REFERENCES employees(emp_id)
;