/* create database my_company; */
use my_company;

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

insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(1, 'Sarah', 'Engineer', '2016-04-01', 1500, null, 1);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(2, 'Amanda', 'Engineer', '2016-04-01', 1200, 1, 2);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(3, 'Michael', 'Sales', '2016-10-01', 1000, null, 1);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(4, 'Robert', 'Engineer', '2017-04-01', 800, 1, 1);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(5, 'James', 'Engineer', '2017-04-01', 1500, 1, 2);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(6, 'Nicole', 'Accountant', '2017-04-01', 1000, null, 3);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(7, 'John', 'Marketer', '2018-04-01', 800, 2, null);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(8, 'Elizabeth', 'Sales', '2018-04-01', 800, 2, 1);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(9, 'Joseph', 'Sales', '2018-10-01', 700, 2, 2);

insert into department(id, name) values(1, 'Development');
insert into department(id, name) values(2, 'Sales');
insert into department(id, name) values(3, 'Accounting');
insert into department(id, name) values(4, 'Legal');

select * from staff;

select name, job, sal from staff;

select name, job work, sal salary from staff;

select * from staff where sal >= 1000;

select * from staff where sal >= 1000 and job = 'engineer';

select * from staff where hire_date >= '2016-04-01' and hire_date <= '2017-04-01';

select * from staff where hire_date between '2016-04-01' and '2017-04-01';

select * from staff where manager_id is null;

select * from staff where name like 'J%';

select * from staff where name like '_o____';

select * from staff where job = 'engineer' order by sal;

select * from staff where job = 'engineer' order by sal desc;

select * from staff where job = 'engineer' order by hire_date, sal;

select sum(sal) from staff;

select job, count(sal) from staff group by job;

select * from staff where sal = (select max(sal) from staff);

select s.name, d.name from staff s inner join department d on s.department_id = d.id;

select s.name, d.name from staff s left outer join department d on s.department_id = d.id;

select s.name, d.name from staff s right outer join department d on s.department_id = d.id;
