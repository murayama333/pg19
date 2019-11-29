# エクササイズ - SQL - Part1

## データベースの作成と準備

+ `my_rpg`データベースを作成してください。
+ `my_rpg`データベースに接続してください。

---

## テーブルの作成

+ 以下の仕様に従って`item`テーブルを作成してください。

```
+--------+--------------+------+-----+---------+-------+
| Field  | Type         | Null | Key | Default | Extra |
+--------+--------------+------+-----+---------+-------+
| id     | int(11)      | NO   | PRI | NULL    |       |
| name   | varchar(100) | YES  |     | NULL    |       |
| effect | int(11)      | YES  |     | NULL    |       |
| price  | int(11)      | YES  |     | NULL    |       |
+--------+--------------+------+-----+---------+-------+
```

---

## レコードの作成

+ 以下の結果に示すとおり、レコードを作成してください。

```
+----+-------------+--------+-------+
| id | name        | effect | price |
+----+-------------+--------+-------+
|  1 | Excalibur   |    100 | 10000 |
|  2 | Gungnir     |     90 |  9000 |
|  3 | Steel sword |     30 |  1000 |
|  4 | Iron ax     |     20 |   500 |
+----+-------------+--------+-------+
```

---


## レコードの更新

+ 以下の結果に示すとおり、レコードを更新してください。

```
+----+-------------+--------+-------+
| id | name        | effect | price |
+----+-------------+--------+-------+
|  1 | Excalibur   |    100 | 10000 |
|  2 | Gungnir     |     90 |  9000 |
|  3 | Flame sword |     99 | 99999 |
|  4 | Iron ax     |     20 |   500 |
+----+-------------+--------+-------+
```

---

## レコードの削除

+ 以下の結果に示すとおり、レコードを削除してください。

```
+----+-----------+--------+-------+
| id | name      | effect | price |
+----+-----------+--------+-------+
|  1 | Excalibur |    100 | 10000 |
|  2 | Gungnir   |     90 |  9000 |
|  4 | Iron ax   |     20 |   500 |
+----+-----------+--------+-------+
```

## 時間が余ったら

> 好きな名前でアイテムを登録してください。