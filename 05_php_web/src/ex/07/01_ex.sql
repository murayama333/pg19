drop table if exists department;
create table department(
  id int primary key,
  name varchar(100)
);

insert into department(id, name) values(1, 'Development');
insert into department(id, name) values(2, 'Sales');
insert into department(id, name) values(3, 'Accounting');
