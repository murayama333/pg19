# SQL - Part1

## 目的

以下の`department`テーブルを作成します。

```
+----+-----------------+
| id | name            |
+----+-----------------+
|  1 | Development     |
|  2 | Sales           |
|  3 | Accounting      |
|  4 | Legal           |
|  5 | Human Resources |
+----+-----------------+
```

---


## データベースの作成

```sql
create database my_company;
```

### データベース一覧の確認

```sql
show databases;
```

```
+--------------------+
| Database           |
+--------------------+
| information_schema |
| my_company         |
| mysql              |
| performance_schema |
| sys                |
+--------------------+
```

---

## データベースの接続

```sql
use my_company;
```

---

## テーブルの作成

```sql
create table department(
  id int primary key,
  name varchar(100)
);
```

+ テーブルの中にid列、name列を定義しています。
+ id列は整数型（int型）、name列は可変長文字列型（varchar(100)）です。
+ id列は主キー（primary key）としています。

### テーブル一覧の確認

```sql
show tables;
```

```
+----------------------+
| Tables_in_my_company |
+----------------------+
| department           |
+----------------------+
```

### テーブル定義の確認

```sql
desc department;
```

```
+-------+--------------+------+-----+---------+-------+
| Field | Type         | Null | Key | Default | Extra |
+-------+--------------+------+-----+---------+-------+
| id    | int(11)      | NO   | PRI | NULL    |       |
| name  | varchar(100) | YES  |     | NULL    |       |
+-------+--------------+------+-----+---------+-------+
```

---

## レコードの作成

```sql
insert into department(id, name) values(1, 'Development');
insert into department(id, name) values(2, 'Sales');
insert into department(id, name) values(3, 'Accounting');
insert into department(id, name) values(4, 'Legal');
insert into department(id, name) values(5, 'Human Resources');
```

+ `insert into`の後に、登録対象の`テーブル名(列名)`を指定します。
+ `values()`の中に登録するデータを並べます。
+ 文字列型データは`''`で囲む必要があります。

---

## レコードの表示

```sql
select * from department;
```

```
+----+-----------------+
| id | name            |
+----+-----------------+
|  1 | Development     |
|  2 | Sales           |
|  3 | Accounting      |
|  4 | Legal           |
|  5 | Human Resources |
+----+-----------------+
```

+ `select`の後に取得する列名を記述します。
+ `*`はすべての列を意味します。
+ `from`の後に対象となるテーブル名を記述します。

---

## レコードの更新

```sql
update department set name = 'HR' where id = 5;
```

+ `update`の後に対象となるテーブル名を記述します。
+ `set`の後に更新する項目とデータを記述します。
+ `where`の後に更新条件を指定します。


---

## レコードの削除

```sql
delete from department where id = 5;
```

+ `from`の後に対象となるテーブル名を記述します。
+ `where`の後に削除条件を指定します。
+ `delete`の後に列の指定は不要です。

---

## 参考：テーブルの削除

```sql
drop table department;
```

---

## エクササイズ

[エクササイズ](ex/01_sql_ex.md)
