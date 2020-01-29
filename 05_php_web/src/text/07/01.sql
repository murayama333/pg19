drop table if exists staff;
create table staff(
  id int primary key,
  name varchar(100),
  job varchar(100),
  hire_date date,
  sal int not null,
  manager_id int,
  department_id int
);

insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(1, 'Sarah', 'Engineer', '2016-04-01', 1500, null, 1);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(2, 'Amanda', 'Engineer', '2016-04-01', 1200, 1, 1);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(3, 'Michael', 'Sales', '2016-10-01', 1000, null, 2);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(4, 'Robert', 'Engineer', '2017-04-01', 800, 1, 1);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(5, 'James', 'Engineer', '2017-04-01', 1500, 1, 1);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(6, 'Nicole', 'Accountant', '2017-04-01', 1000, null, 3);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(7, 'John', 'Marketer', '2018-04-01', 800, 2, null);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(8, 'Elizabeth', 'Sales', '2018-04-01', 800, 3, 2);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(9, 'Joseph', 'Sales', '2018-10-01', 700, 3, 2);
