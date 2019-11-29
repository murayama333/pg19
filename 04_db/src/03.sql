use my_company;

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

drop table if exists department;
create table department(
  id int primary key,
  name varchar(100)
);

drop table if exists project;
create table project(
  id int primary key,
  name varchar(100),
  start_date date,
  end_date date
);

drop table if exists assign;
create table assign(
  id int primary key,
  project_id int,
  staff_id int
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

insert into department(id, name) values(1, 'Development');
insert into department(id, name) values(2, 'Sales');
insert into department(id, name) values(3, 'Accounting');
insert into department(id, name) values(4, 'Legal');

insert into project(id, name, start_date, end_date) values(1, 'Project A', '2019-01-01', '2019-06-30');
insert into project(id, name, start_date, end_date) values(2, 'Project B', '2019-01-01', '2019-09-30');
insert into project(id, name, start_date, end_date) values(3, 'Project C', '2019-03-01', '2019-04-30');

insert into assign(id, project_id, staff_id) values(1, 1, 1);
insert into assign(id, project_id, staff_id) values(2, 1, 5);
insert into assign(id, project_id, staff_id) values(3, 1, 8);
insert into assign(id, project_id, staff_id) values(4, 2, 2);
insert into assign(id, project_id, staff_id) values(5, 2, 3);
insert into assign(id, project_id, staff_id) values(6, 2, 4);
insert into assign(id, project_id, staff_id) values(7, 3, 5);
insert into assign(id, project_id, staff_id) values(8, 3, 7);
insert into assign(id, project_id, staff_id) values(9, 3, 9);
