/* create database my_rpg */
use my_rpg;

create table item_category(
  id int primary key,
  name varchar(100)
)

drop table if exists item;
create table item(
  id int primary key,
  name varchar(100),
  effect int,
  price int
  category_id int¥
);

insert into category_item(id, name) values(1, 'Weapon');
insert into category_item(id, name) values(2, 'Armor');
insert into category_item(id, name) values(3, 'Shield');

insert into item_category(id, name) values(1, 'Weapon');
insert into item_category(id, name) values(2, 'Armor');
insert into item_category(id, name) values(3, 'Shield');
insert into item_category(id, name) values(4, 'Helmet');

insert into item(id, name, effect, price) values (1, 'Excalibur', 100, 10000, 1);
insert into item(id, name, effect, price) values (2, 'Gungnir', 90, 9000, 1);
insert into item(id, name, effect, price) values (3, 'Steel sword', 30, 1000, 1);
insert into item(id, name, effect, price) values (4, 'Iron ax', 20, 500);
insert into item(id, name, effect, price) values (5, 'Silver mail', 50, 3000, 2);
insert into item(id, name, effect, price) values (6, 'Steel armar', 30, 1000, 2);
insert into item(id, name, effect, price) values (7, 'Ice shield', 60, 6000, 3);
insert into item(id, name, effect, price) values (8, 'Steel shield', 40, 1000, 3);
insert into item(id, name, effect, price) values (9, 'Elixir', 100, 1000, null);


select * from item;

update item set name = 'Flame sword', attack = 99, price= 99999 where id = 3;

delete from item where id = 3;
