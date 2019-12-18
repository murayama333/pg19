# トランザクション

## 目的

MySQLにはトランザクションを管理する仕組みが用意されています。

> MySQLドキュメントより：トランザクションは、作業の原子単位で、この単位でコミットまたはロールバックできます。 https://dev.mysql.com/doc/refman/5.6/ja/glossary.html#glos_transaction


## 準備

`my_company`データベースを作成します。

```sql
create database my_company;
```

`my_company`データベースに接続します。

```sql
use my_company;
```

以下のテーブルを作成します。

+ `department`
+ `staff`

### departmentテーブル

```
+-------+--------------+------+-----+---------+-------+
| Field | Type         | Null | Key | Default | Extra |
+-------+--------------+------+-----+---------+-------+
| id    | int(11)      | NO   | PRI | NULL    |       |
| name  | varchar(100) | YES  |     | NULL    |       |
+-------+--------------+------+-----+---------+-------+
```

```sql
create table department(
  id int primary key,
  name varchar(100)
);
```

### staffテーブル

```
+---------------+--------------+------+-----+---------+-------+
| Field         | Type         | Null | Key | Default | Extra |
+---------------+--------------+------+-----+---------+-------+
| id            | int(11)      | NO   | PRI | NULL    |       |
| name          | varchar(100) | YES  |     | NULL    |       |
| job           | varchar(100) | YES  |     | NULL    |       |
| hire_date     | date         | YES  |     | NULL    |       |
| sal           | int(11)      | NO   |     | NULL    |       |
| manager_id    | int(11)      | YES  |     | NULL    |       |
| department_id | int(11)      | YES  |     | NULL    |       |
+---------------+--------------+------+-----+---------+-------+
```

```sql
create table staff(
  id int primary key,
  name varchar(100),
  job varchar(100),
  hire_date date,
  sal int not null,
  manager_id int,
  department_id int
);
```


### テーブル一覧の確認

```sql
show tables;
```

```
+----------------------+
| Tables_in_my_company |
+----------------------+
| department           |
| staff                |
+----------------------+
```

## トランザクション管理

+ MySQL Clientを2つ起動し、それぞれmy_companyデータベースに接続します。

### オートコミットの確認

+ （Client - 1）デフォルトでオートコミットが有効（`1`）になっていることを確認します。

```sql
mysql> SELECT @@autocommit;
+--------------+
| @@autocommit |
+--------------+
|            1 |
+--------------+
```

### オートコミットの無効化

+ （Client - 1）オートコミットを無効（0）にします。

```
mysql> set autocommit = 0;
Query OK, 0 rows affected (0.00 sec)
```

> MySQLではオートコミットを無効にすると、commit / rollbackするまでトランザクションは反映されません。

+ （Client - 1）オートコミットが無効（`0`）になっていることを確認します。

```
mysql> SELECT @@autocommit;
+--------------+
| @@autocommit |
+--------------+
|            0 |
+--------------+
```

### トランザクションのコミット

+ （Client - 1）`department`テーブルに以下のレコードを追加します。

```sql
mysql> insert into department(id, name) values(1, 'Development');
Query OK, 1 row affected (0.00 sec)
```

+ （Client - 1）`department`テーブルのレコードを参照します。

```sql
mysql> select * from department;
+----+-------------+
| id | name        |
+----+-------------+
|  1 | Development |
+----+-------------+
```

+ （Client - 2）`department`テーブルのレコードを参照します。

```sql
mysql> select * from department;
Empty set (0.00 sec)
```

> （Client - 1）において登録中のレコードはコミットされていないため、（Client - 2）では表示されないことを確認します。

+ （Client - 1）トランザクションをコミットします。

```sql
mysql> commit;
Query OK, 0 rows affected (0.00 sec)
```

+ （Client - 2）`department`テーブルのレコードを参照します。

```sql
mysql> select * from department;
+----+-------------+
| id | name        |
+----+-------------+
|  1 | Development |
+----+-------------+
```

> （Client - 1）においてコミットされたレコードが（Client - 2）においても表示されることを確認します。

---

### トランザクションのロールバック

+ （Client - 1）`department`テーブルに以下のレコードを追加します。

```sql
mysql> insert into department(id, name) values(2, 'Sales');
Query OK, 1 row affected (0.00 sec)
```

+ （Client - 1）`department`テーブルのレコードを参照します。

```sql
mysql> select * from department;
+----+-------------+
| id | name        |
+----+-------------+
|  1 | Development |
|  2 | Sales       |
+----+-------------+
2 rows in set (0.00 sec)
```

+ （Client - 2）`department`テーブルのレコードを参照します。

```sql
mysql> select * from department;
+----+-------------+
| id | name        |
+----+-------------+
|  1 | Development |
+----+-------------+
1 row in set (0.00 sec)
```

> （Client - 1）にて登録中のレコードはコミットされていないため、表示されないことを確認します。

+ （Client - 1）トランザクションをロールバックします。

```sql
mysql> rollback;
Query OK, 0 rows affected (0.00 sec)
```

+ （Client - 1）`department`テーブルのレコードを参照します。

```sql
mysql> select * from department;
+----+-------------+
| id | name        |
+----+-------------+
|  1 | Development |
+----+-------------+
```

+ （Client - 2）`department`テーブルのレコードを参照します。

```sql
mysql> select * from department;
+----+-------------+
| id | name        |
+----+-------------+
|  1 | Development |
+----+-------------+
```

> （Client - 1）（Client - 2）においてロールバックされたレコードが表示されないことを確認します。

---

## エクササイズ

[エクササイズ](ex/05_transaction_ex.md)
