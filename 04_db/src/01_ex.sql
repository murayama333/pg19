create database my_rpg;
use my_rpg;

create table item(
  id int primary key,
  name varchar(100),
  effect int,
  price int
);

insert into item(id, name, effect, price) values (1, 'Excalibur', 100, 10000);
insert into item(id, name, effect, price) values (2, 'Gungnir', 90, 9000);
insert into item(id, name, effect, price) values (3, 'Steel sword', 30, 1000);
insert into item(id, name, effect, price) values (4, 'Iron ax', 20, 500);

select * from item;


update item set name = 'Flame sword', effect = 99, price= 99999 where id = 3;

delete from item where id = 3;
