# エクササイズ - SQL - Part2

## データベースの作成と準備

+ `my_rpg`データベースに接続してください。

---

## テーブルの作成

+ 以下の仕様に従って`item_category`テーブルを作成してください。

```
+-------+--------------+------+-----+---------+-------+
| Field | Type         | Null | Key | Default | Extra |
+-------+--------------+------+-----+---------+-------+
| id    | int(11)      | NO   | PRI | NULL    |       |
| name  | varchar(100) | YES  |     | NULL    |       |
+-------+--------------+------+-----+---------+-------+
```


+ 以下の仕様に従って`item`テーブルを再度、作成してください。

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

> category_idが追加サれている点に注意してください。

---

## レコードの作成

+ 以下の結果に示すとおり、`item_category`テーブルにレコードを作成してください。

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

+ 以下の結果に示すとおり、`item`テーブルにレコードを作成してください。

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

---

## itemテーブルの検索

+ 1 `category_id`が`2`のレコードの`name`と`price`を表示してください。

```
+-------------+-------+
| name        | price |
+-------------+-------+
| Excalibur   | 10000 |
| Gungnir     |  9000 |
| Steel sword |  1000 |
| Iron ax     |   500 |
+-------------+-------+
```

+ 2 `price`が`1000〜6000`のレコードの`name`と`price`を表示してください。

```
+--------------+-------+
| name         | price |
+--------------+-------+
| Steel sword  |  1000 |
| Silver mail  |  3000 |
| Steel armar  |  1000 |
| Ice shield   |  6000 |
| Steel shield |  1000 |
| Elixir       |  1000 |
+--------------+-------+
```


+ 3 `category_id`が`null`のレコード表示してください。

```
+--------+
| name   |
+--------+
| Elixir |
+--------+
```

+ 4 `name`が`Steel`で始まるレコード表示してください。

```
+----+--------------+--------+-------+-------------+
| id | name         | effect | price | category_id |
+----+--------------+--------+-------+-------------+
|  3 | Steel sword  |     30 |  1000 |           1 |
|  6 | Steel armar  |     30 |  1000 |           2 |
|  8 | Steel shield |     40 |  1000 |           3 |
+----+--------------+--------+-------+-------------+
```


+ 5 `category_id`が`3`のレコードの`price`の最大値を表示してください。

```
+------------+
| max(price) |
+------------+
|      6000 |
+------------+
```

+ 6 `category_id`ごとの`price`の合計値を表示してください。ただし、`category_id`が`null`のものは対象外とします。


```
+-------------+------------+
| category_id | sum(price) |
+-------------+------------+
|           1 |      20500 |
|           2 |       4000 |
|           3 |       7000 |
+-------------+------------+
```

+ 7 `price`の最大値であるレコードの`name`と`price`を出力してください。


```
+-----------+-------+
| name      | price |
+-----------+-------+
| Excalibur | 10000 |
+-----------+-------+
```

+ 8 `price`の昇順で表示してください。

```
+----+--------------+--------+-------+-------------+
| id | name         | effect | price | category_id |
+----+--------------+--------+-------+-------------+
|  4 | Iron ax      |     20 |   500 |           1 |
|  3 | Steel sword  |     30 |  1000 |           1 |
|  6 | Steel armar  |     30 |  1000 |           2 |
|  8 | Steel shield |     40 |  1000 |           3 |
|  9 | Elixir       |    100 |  1000 |        NULL |
|  5 | Silver mail  |     50 |  3000 |           2 |
|  7 | Ice shield   |     60 |  6000 |           3 |
|  2 | Gungnir      |     90 |  9000 |           1 |
|  1 | Excalibur    |    100 | 10000 |           1 |
+----+--------------+--------+-------+-------------+
```


+ 9 `effect`の降順で表示してください。

```
+----+--------------+--------+-------+-------------+
| id | name         | effect | price | category_id |
+----+--------------+--------+-------+-------------+
|  1 | Excalibur    |    100 | 10000 |           1 |
|  9 | Elixir       |    100 |  1000 |        NULL |
|  2 | Gungnir      |     90 |  9000 |           1 |
|  7 | Ice shield   |     60 |  6000 |           3 |
|  5 | Silver mail  |     50 |  3000 |           2 |
|  8 | Steel shield |     40 |  1000 |           3 |
|  3 | Steel sword  |     30 |  1000 |           1 |
|  6 | Steel armar  |     30 |  1000 |           2 |
|  4 | Iron ax      |     20 |   500 |           1 |
+----+--------------+--------+-------+-------------+
```

+ 10 `effect`が`50`以上のレコードを`price`の降順で表示してください。

```
+-------------+--------+-------+
| name        | effect | price |
+-------------+--------+-------+
| Excalibur   |    100 | 10000 |
| Gungnir     |     90 |  9000 |
| Ice shield  |     60 |  6000 |
| Silver mail |     50 |  3000 |
| Elixir      |    100 |  1000 |
+-------------+--------+-------+
```

<!--
1.
select name, price from item where category_id = 2;

2.
select name, price from item where price between 1000 and 6000;

3.
select name from item where category_id is null;

4.
select * from item where name like 'Steel%';

5.
select max(price) from item where category_id = 3;

6.
select category_id, sum(price) from item where category_id is not null group by category_id;

7.
select name, price from item where price = (select max(price) from item);

8.
select * from item order by price;

9.
select * from item order by effect desc;

10.
select name, effect, price from item where effect >= 50 order by price desc;

-->


---

## テーブルの結合

+ 1 `item`テーブルと`item_category`テーブルを内部結合して、以下のとおり表示してください。

```
+----------+--------------+-------+
| category | name         | price |
+----------+--------------+-------+
| Weapon   | Excalibur    | 10000 |
| Weapon   | Gungnir      |  9000 |
| Weapon   | Steel sword  |  1000 |
| Weapon   | Iron ax      |   500 |
| Armor    | Silver mail  |  3000 |
| Armor    | Steel armar  |  1000 |
| Shield   | Ice shield   |  6000 |
| Shield   | Steel shield |  1000 |
+----------+--------------+-------+
```


+ 2 `item`テーブルと`item_category`テーブルを内部結合して、以下のとおり`category`ごとの`price`の合計を表示してください。

```
+----------+-------+
| category | price |
+----------+-------+
| Weapon   | 20500 |
| Armor    |  4000 |
| Shield   |  7000 |
+----------+-------+
```

+ 3 2の結果を`price`の昇順で表示してください。

```
+----------+-------+
| category | price |
+----------+-------+
| Armor    |  4000 |
| Shield   |  7000 |
| Weapon   | 20500 |
+----------+-------+
```

<!--

1.
select ic.name category, i.name, i.price from item i inner join item_category ic on i.category_id = ic.id;


2.
select ic.name category, i.price from (select category_id, sum(price) price from item group by category_id) i inner join item_category ic on i.category_id = ic.id;

3.
select ic.name category, i.price from (select category_id, sum(price) price from item group by category_id) i inner join item_category ic on i.category_id = ic.id order by 2;

-->