/* create database my_rpg */
use my_rpg;

drop table if exists item_category;
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
  category_id int
);

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


create table warrior(
  id int primary key,
  name varchar(100)
);


insert into warrior(id, name) values(1, 'Cloud');
insert into warrior(id, name) values(2, 'Ryan');

create table equipment(
  id int primary key,
  warrior_id int,
  item_id int
);

insert into equipment(id, warrior_id, item_id) values(1, 1, 1);
insert into equipment(id, warrior_id, item_id) values(2, 1, 5);
insert into equipment(id, warrior_id, item_id) values(3, 1, 7);

insert into equipment(id, warrior_id, item_id) values(4, 2, 3);
insert into equipment(id, warrior_id, item_id) values(5, 2, 6);
insert into equipment(id, warrior_id, item_id) values(6, 2, 8);


select w.name warrior_name, ic.name category_name, i.name item_name
 from warrior w
inner join equipment e
on w.id = e.warrior_id
inner join item i
on e.item_id = i.id
inner join item_category ic
on i.category_id = ic.id
where w.id = 1;


