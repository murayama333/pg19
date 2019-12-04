# エクササイズ - SQL - Part3

## データベースの作成と準備

+ `my_rpg`データベースに接続してください。

---

## テーブルの作成

以下のテーブルを作成します。

+ `item_category`
+ `item`
+ `warrior`
+ `equipment`


以下の仕様に従って`item_category`テーブルを作成してください。

> エクササイズ2で作成済みの場合はそのままで大丈夫です。

```
+-------+--------------+------+-----+---------+-------+
| Field | Type         | Null | Key | Default | Extra |
+-------+--------------+------+-----+---------+-------+
| id    | int(11)      | NO   | PRI | NULL    |       |
| name  | varchar(100) | YES  |     | NULL    |       |
+-------+--------------+------+-----+---------+-------+
```

以下の仕様に従って`item`テーブルを再度、作成してください。

> エクササイズ2で作成済みの場合はそのままで大丈夫です。

```
+-------------+--------------+------+-----+---------+-------+
| Field       | Type         | Null | Key | Default | Extra |
+-------------+--------------+------+-----+---------+-------+
| id          | int(11)      | NO   | PRI | NULL    |       |
| name        | varchar(100) | YES  |     | NULL    |       |
| effect      | int(11)      | YES  |     | NULL    |       |
| price       | int(11)      | YES  |     | NULL    |       |
| category_id | int(11)      | YES  |     | NULL    |       |
+-------------+--------------+------+-----+---------+-------+
```

以下の仕様に従って`warrior`テーブルを再度、作成してください。

```
+-------+--------------+------+-----+---------+-------+
| Field | Type         | Null | Key | Default | Extra |
+-------+--------------+------+-----+---------+-------+
| id    | int(11)      | NO   | PRI | NULL    |       |
| name  | varchar(100) | YES  |     | NULL    |       |
+-------+--------------+------+-----+---------+-------+
```

以下の仕様に従って`equipment`テーブルを再度、作成してください。

```
+------------+---------+------+-----+---------+-------+
| Field      | Type    | Null | Key | Default | Extra |
+------------+---------+------+-----+---------+-------+
| id         | int(11) | NO   | PRI | NULL    |       |
| ???????_id | ??????? | YES  |     | NULL    |       |
| ????_id    | ??????? | YES  |     | NULL    |       |
+------------+---------+------+-----+---------+-------+
```

> 列名、データ型を决定してください。


---

## レコードの作成

以下の結果に示すとおり、`item_category`テーブルにレコードを作成してください。

> エクササイズ2で作成済みの場合はそのままで大丈夫です。

```
+----+--------+
| id | name   |
+----+--------+
|  1 | Weapon |
|  2 | Armor  |
|  3 | Shield |
|  4 | Helmet |
+----+--------+
```

以下の結果に示すとおり、`item`テーブルにレコードを作成してください。

> エクササイズ2で作成済みの場合はそのままで大丈夫です。

```
+----+--------------+--------+-------+-------------+
| id | name         | effect | price | category_id |
+----+--------------+--------+-------+-------------+
|  1 | Excalibur    |    100 | 10000 |           1 |
|  2 | Gungnir      |     90 |  9000 |           1 |
|  3 | Steel sword  |     30 |  1000 |           1 |
|  4 | Iron ax      |     20 |   500 |           1 |
|  5 | Silver mail  |     50 |  3000 |           2 |
|  6 | Steel armar  |     30 |  1000 |           2 |
|  7 | Ice shield   |     60 |  6000 |           3 |
|  8 | Steel shield |     40 |  1000 |           3 |
|  9 | Elixir       |    100 |  1000 |        NULL |
+----+--------------+--------+-------+-------------+
```

以下の結果に示すとおり、`warrior`テーブルにレコードを作成してください。

```
+----+-------+
| id | name  |
+----+-------+
|  1 | Cloud |
|  2 | Ryan  |
+----+-------+
```

以下の要件の示すとおり、`warrior`テーブルにレコードを作成してください。

+ `Cloud`は以下の`item`を装備します。
  + `Excalibur`
  + `Silver mail`
  + `Ice shield`
+ `Ryan`は以下の`item`を装備します。
  + `Steel sword`
  + `Steel armar`
  + `Steel shield`

---

## データの検索

+ 1 `Cloud`の装備を表示してください。

```
+--------------+---------------+-------------+
| warrior_name | category_name | item_name   |
+--------------+---------------+-------------+
| Cloud        | Weapon        | Excalibur   |
| Cloud        | Armor         | Silver mail |
| Cloud        | Shield        | Ice shield  |
+--------------+---------------+-------------+
```

+ 2 `Ryan`の装備を表示してください。

```
+--------------+---------------+--------------+
| warrior_name | category_name | item_name    |
+--------------+---------------+--------------+
| Ryan         | Weapon        | Steel sword  |
| Ryan         | Armor         | Steel armar  |
| Ryan         | Shield        | Steel shield |
+--------------+---------------+--------------+
```


+ 3 `Steel sword`を装備している`warrior`を表示してください。

```
+-------------+--------------+
| item_name   | warrior_name |
+-------------+--------------+
| Steel sword | Ryan         |
+-------------+--------------+
```

+ 4 ER図を作成してください。


<!--

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

select w.name warrior_name, ic.name category_name, i.name item_name
from warrior w
inner join equipment e
on w.id = e.warrior_id
inner join item i
on e.item_id = i.id
inner join item_category ic
on i.category_id = ic.id
where w.id = 2;

select i.name item_name, w.name warrior_name
from item i
inner join equipment e
on i.id = e.item_id
inner join warrior w
on e.warrior_id = w.id
where i.id = 3;



-->