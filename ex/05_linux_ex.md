# エクササイズ - MySQL

## 1 MySQLのインストール

+ MySQLパッケージをインストールする

```
$ sudo apt install mysql-server
```

+ MySQLを初期化する

```
$ sudo mysql_secure_installation
```

> いくつか初期セットアップに関する質問があるのでyを押していく。

## 2 MySQLへの接続

+ `mysql`コマンドでMySQLクライアントを起動する

```
$ sudo mysql -u root
```

+ `show databases`コマンドでデータベースの一覧を確認する

```
mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
| sys                |
+--------------------+
4 rows in set (0.00 sec)
```

+ `create database`コマンドで`study`データベースを新規作成する

```
mysql> create database study;
Query OK, 1 row affected (0.00 sec)
```

> `show databases`コマンドで作成されたデータベースを確認します。

+ `use`コマンドでデータベースに接続する

```
mysql> use study;
Database changed
```

## 3 テーブルの作成と編集

+ `show tables`コマンドでテーブルの一覧を確認する

```
mysql> show tables;
Empty set (0.00 sec)
```

> `study`データベースは作成したばかりのため、テーブルは0件となっています。

+ `create table`コマンドでテーブルを作成する

```sql
create table city(
  id int primary key,
  name varchar(100),
  population int
);
```

> `show tables`コマンドで作成されたテーブルを確認します。

+ テーブルにレコードを登録する

```sql
insert into city(id, name, population) values(1, 'osakashi', 2700000);
insert into city(id, name, population) values(2, 'sakaishi', 8400000);
insert into city(id, name, population) values(3, 'higashiosakashi', 500000);
```
+ テーブルのレコードを検索する


```sql
select * from city;
```

```sql
select * from city where id = 1;
```

```sql
select * from city order by population;
```

+ テーブルのレコードを更新する

```sql
update city set population = 840000 where id = 2;
```

+ テーブルのレコードを削除する

```sql
delete from city where id = 3;
```

