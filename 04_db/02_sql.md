# SQL - Part2

## 目的

以下の`department`テーブルと`staff`テーブルを作成します。

### departmentテーブル

```
+----+-------------+
| id | name        |
+----+-------------+
|  1 | Development |
|  2 | Sales       |
|  3 | Accounting  |
|  4 | Legal       |
+----+-------------+
```


### staffテーブル

```
+----+-----------+------------+------------+------+------------+---------------+
| id | name      | job        | hire_date  | sal  | manager_id | department_id |
+----+-----------+------------+------------+------+------------+---------------+
|  1 | Sarah     | Engineer   | 2016-04-01 | 1500 |       NULL |             1 |
|  2 | Amanda    | Engineer   | 2016-04-01 | 1200 |          1 |             1 |
|  3 | Michael   | Sales      | 2016-10-01 | 1000 |       NULL |             2 |
|  4 | Robert    | Engineer   | 2017-04-01 |  800 |          1 |             1 |
|  5 | James     | Engineer   | 2017-04-01 | 1500 |          1 |             1 |
|  6 | Nicole    | Accountant | 2017-04-01 | 1000 |       NULL |             3 |
|  7 | John      | Marketer   | 2018-04-01 |  800 |          2 |          NULL |
|  8 | Elizabeth | Sales      | 2018-04-01 |  800 |          3 |             2 |
|  9 | Joseph    | Sales      | 2018-10-01 |  700 |          3 |             2 |
+----+-----------+------------+------------+------+------------+---------------+
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

---

## レコードの作成

```sql
insert into department(id, name) values(1, 'Development');
insert into department(id, name) values(2, 'Sales');
insert into department(id, name) values(3, 'Accounting');
insert into department(id, name) values(4, 'Legal');
```

```sql
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(1, 'Sarah', 'Engineer', '2016-04-01', 1500, null, 1);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(2, 'Amanda', 'Engineer', '2016-04-01', 1200, 1, 1);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(3, 'Michael', 'Sales', '2016-10-01', 1000, null, 2);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(4, 'Robert', 'Engineer', '2017-04-01', 800, 1, 1);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(5, 'James', 'Engineer', '2017-04-01', 1500, 1, 1);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(6, 'Nicole', 'Accountant', '2017-04-01', 1000, null, 3);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(7, 'John', 'Marketer', '2018-04-01', 800, 2, null);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(8, 'Elizabeth', 'Sales', '2018-04-01', 800, 3, 2);
insert into staff(id, name, job, hire_date, sal, manager_id, department_id) values(9, 'Joseph', 'Sales', '2018-10-01', 700, 3, 2);
```

---

## レコードの表示

### 全件取得

```sql
select * from staff;
```

```
+----+-----------+------------+------------+------+------------+---------------+
| id | name      | job        | hire_date  | sal  | manager_id | department_id |
+----+-----------+------------+------------+------+------------+---------------+
|  1 | Sarah     | Engineer   | 2016-04-01 | 1500 |       NULL |             1 |
|  2 | Amanda    | Engineer   | 2016-04-01 | 1200 |          1 |             1 |
|  3 | Michael   | Sales      | 2016-10-01 | 1000 |       NULL |             2 |
|  4 | Robert    | Engineer   | 2017-04-01 |  800 |          1 |             1 |
|  5 | James     | Engineer   | 2017-04-01 | 1500 |          1 |             1 |
|  6 | Nicole    | Accountant | 2017-04-01 | 1000 |       NULL |             3 |
|  7 | John      | Marketer   | 2018-04-01 |  800 |          2 |          NULL |
|  8 | Elizabeth | Sales      | 2018-04-01 |  800 |          3 |             2 |
|  9 | Joseph    | Sales      | 2018-10-01 |  700 |          3 |             2 |
+----+-----------+------------+------------+------+------------+---------------+
```

---

### 列の指定

```sql
select name, job, sal from staff;
```

```
+-----------+------------+--------+
| name      | job        | sal    |
+-----------+------------+--------+
| Sarah     | Engineer   |   1500 |
| Amanda    | Engineer   |   1200 |
| Michael   | Sales      |   1000 |
| Robert    | Engineer   |    800 |
| James     | Engineer   |   1500 |
| Nicole    | Accountant |   1000 |
| John      | Marketer   |    800 |
| Elizabeth | Sales      |    800 |
| Joseph    | Sales      |    700 |
+-----------+------------+--------+
```

#### 列に別名を付ける場合


```sql
select name, job work, sal salary from staff;
```
```
+-----------+------------+--------+
| name      | work       | salary |
+-----------+------------+--------+
| Sarah     | Engineer   |   1500 |
| Amanda    | Engineer   |   1200 |
| Michael   | Sales      |   1000 |
| Robert    | Engineer   |    800 |
| James     | Engineer   |   1500 |
| Nicole    | Accountant |   1000 |
| John      | Marketer   |    800 |
| Elizabeth | Sales      |    800 |
| Joseph    | Sales      |    700 |
+-----------+------------+--------+
```

---

### 条件の指定

```sql
select * from staff where sal >= 1000;
```

```
+----+---------+------------+------------+------+------------+---------------+
| id | name    | job        | hire_date  | sal  | manager_id | department_id |
+----+---------+------------+------------+------+------------+---------------+
|  1 | Sarah   | Engineer   | 2016-04-01 | 1500 |       NULL |             1 |
|  2 | Amanda  | Engineer   | 2016-04-01 | 1200 |          1 |             1 |
|  3 | Michael | Sales      | 2016-10-01 | 1000 |       NULL |             2 |
|  5 | James   | Engineer   | 2017-04-01 | 1500 |          1 |             1 |
|  6 | Nicole  | Accountant | 2017-04-01 | 1000 |       NULL |             3 |
+----+---------+------------+------------+------+------------+---------------+
```

#### 論理演算子

```sql
select * from staff where sal >= 1000 and job = 'engineer';
```

```
+----+--------+----------+------------+------+------------+---------------+
| id | name   | job      | hire_date  | sal  | manager_id | department_id |
+----+--------+----------+------------+------+------------+---------------+
|  1 | Sarah  | Engineer | 2016-04-01 | 1500 |       NULL |             1 |
|  2 | Amanda | Engineer | 2016-04-01 | 1200 |          1 |             1 |
|  5 | James  | Engineer | 2017-04-01 | 1500 |          1 |             1 |
+----+--------+----------+------------+------+------------+---------------+
```

#### 日付の範囲指定

```sql
select * from staff where hire_date >= '2016-04-01' and hire_date <= '2017-04-01';
```

```
+----+---------+------------+------------+------+------------+---------------+
| id | name    | job        | hire_date  | sal  | manager_id | department_id |
+----+---------+------------+------------+------+------------+---------------+
|  1 | Sarah   | Engineer   | 2016-04-01 | 1500 |       NULL |             1 |
|  2 | Amanda  | Engineer   | 2016-04-01 | 1200 |          1 |             1 |
|  3 | Michael | Sales      | 2016-10-01 | 1000 |       NULL |             2 |
|  4 | Robert  | Engineer   | 2017-04-01 |  800 |          1 |             1 |
|  5 | James   | Engineer   | 2017-04-01 | 1500 |          1 |             1 |
|  6 | Nicole  | Accountant | 2017-04-01 | 1000 |       NULL |             3 |
+----+---------+------------+------------+------+------------+---------------+
```

#### 日付の範囲指定 between演算子

```sql
select * from staff where hire_date between '2016-04-01' and '2017-04-01';
```

```
+----+---------+------------+------------+------+------------+---------------+
| id | name    | job        | hire_date  | sal  | manager_id | department_id |
+----+---------+------------+------------+------+------------+---------------+
|  1 | Sarah   | Engineer   | 2016-04-01 | 1500 |       NULL |             1 |
|  2 | Amanda  | Engineer   | 2016-04-01 | 1200 |          1 |             1 |
|  3 | Michael | Sales      | 2016-10-01 | 1000 |       NULL |             2 |
|  4 | Robert  | Engineer   | 2017-04-01 |  800 |          1 |             1 |
|  5 | James   | Engineer   | 2017-04-01 | 1500 |          1 |             1 |
|  6 | Nicole  | Accountant | 2017-04-01 | 1000 |       NULL |             3 |
+----+---------+------------+------------+------+------------+---------------+
```

#### null値の比較


```sql
select * from staff where manager_id is null;
```

```
+----+---------+------------+------------+------+------------+---------------+
| id | name    | job        | hire_date  | sal  | manager_id | department_id |
+----+---------+------------+------------+------+------------+---------------+
|  1 | Sarah   | Engineer   | 2016-04-01 | 1500 |       NULL |             1 |
|  3 | Michael | Sales      | 2016-10-01 | 1000 |       NULL |             2 |
|  6 | Nicole  | Accountant | 2017-04-01 | 1000 |       NULL |             3 |
+----+---------+------------+------------+------+------------+---------------+
```

#### like演算子 % 任意の文字列にマッチ


```sql
select * from staff where name like 'J%';
```

```
+----+--------+----------+------------+------+------------+---------------+
| id | name   | job      | hire_date  | sal  | manager_id | department_id |
+----+--------+----------+------------+------+------------+---------------+
|  5 | James  | Engineer | 2017-04-01 | 1500 |          1 |             1 |
|  7 | John   | Marketer | 2018-04-01 |  800 |          2 |          NULL |
|  9 | Joseph | Sales    | 2018-10-01 |  700 |          3 |             2 |
+----+--------+----------+------------+------+------------+---------------+
```

#### like演算子 _ 任意の1文字にマッチ

```sql
select * from staff where name like '_o____';
```

```
+----+--------+----------+------------+-----+------------+---------------+
| id | name   | job      | hire_date  | sal | manager_id | department_id |
+----+--------+----------+------------+-----+------------+---------------+
|  4 | Robert | Engineer | 2017-04-01 | 800 |          1 |             1 |
|  9 | Joseph | Sales    | 2018-10-01 | 700 |          3 |             2 |
+----+--------+----------+------------+-----+------------+---------------+
```

### ソート（並び替え）


```sql
select * from staff where job = 'engineer' order by sal;
```

```
+----+--------+----------+------------+------+------------+---------------+
| id | name   | job      | hire_date  | sal  | manager_id | department_id |
+----+--------+----------+------------+------+------------+---------------+
|  4 | Robert | Engineer | 2017-04-01 |  800 |          1 |             1 |
|  2 | Amanda | Engineer | 2016-04-01 | 1200 |          1 |             1 |
|  1 | Sarah  | Engineer | 2016-04-01 | 1500 |       NULL |             1 |
|  5 | James  | Engineer | 2017-04-01 | 1500 |          1 |             1 |
+----+--------+----------+------------+------+------------+---------------+
```

#### 並び替え - 降順

```sql
select * from staff where job = 'engineer' order by sal desc;
```

```
+----+--------+----------+------------+------+------------+---------------+
| id | name   | job      | hire_date  | sal  | manager_id | department_id |
+----+--------+----------+------------+------+------------+---------------+
|  1 | Sarah  | Engineer | 2016-04-01 | 1500 |       NULL |             1 |
|  5 | James  | Engineer | 2017-04-01 | 1500 |          1 |             1 |
|  2 | Amanda | Engineer | 2016-04-01 | 1200 |          1 |             1 |
|  4 | Robert | Engineer | 2017-04-01 |  800 |          1 |             1 |
+----+--------+----------+------------+------+------------+---------------+
```

#### 並び替え - 複数列の指定

```sql
select * from staff where job = 'engineer' order by hire_date, sal;
```

```
+----+--------+----------+------------+------+------------+---------------+
| id | name   | job      | hire_date  | sal  | manager_id | department_id |
+----+--------+----------+------------+------+------------+---------------+
|  2 | Amanda | Engineer | 2016-04-01 | 1200 |          1 |             1 |
|  1 | Sarah  | Engineer | 2016-04-01 | 1500 |       NULL |             1 |
|  4 | Robert | Engineer | 2017-04-01 |  800 |          1 |             1 |
|  5 | James  | Engineer | 2017-04-01 | 1500 |          1 |             1 |
+----+--------+----------+------------+------+------------+---------------+
```

### グループ関数

```sql
select sum(sal) from staff;
```

```
+----------+
| sum(sal) |
+----------+
|     9300 |
+----------+
```

#### グループ関数 - group by

```sql
select job, count(sal) from staff group by job;
```

```
+------------+------------+
| job        | count(sal) |
+------------+------------+
| Engineer   |          4 |
| Sales      |          3 |
| Accountant |          1 |
| Marketer   |          1 |
+------------+------------+
```

### サブクエリ（副問合せ）

```sql
select * from staff where sal = (select max(sal) from staff);
```

```
+----+-------+----------+------------+------+------------+---------------+
| id | name  | job      | hire_date  | sal  | manager_id | department_id |
+----+-------+----------+------------+------+------------+---------------+
|  1 | Sarah | Engineer | 2016-04-01 | 1500 |       NULL |             1 |
|  5 | James | Engineer | 2017-04-01 | 1500 |          1 |             1 |
+----+-------+----------+------------+------+------------+---------------+
```

### テーブルの結合

#### 内部結合

```sql
select s.name, s.job, d.name from staff s inner join department d on s.department_id = d.id;
```

```
+-----------+------------+-------------+
| name      | job        | name        |
+-----------+------------+-------------+
| Sarah     | Engineer   | Development |
| Amanda    | Engineer   | Development |
| Michael   | Sales      | Sales       |
| Robert    | Engineer   | Development |
| James     | Engineer   | Development |
| Nicole    | Accountant | Accounting  |
| Elizabeth | Sales      | Sales       |
| Joseph    | Sales      | Sales       |
+-----------+------------+-------------+
```


#### 外部結合（左外部結合）

```sql
select s.name, s.job, d.name from staff s left outer join department d on s.department_id = d.id;
```

```
+-----------+------------+-------------+
| name      | job        | name        |
+-----------+------------+-------------+
| Sarah     | Engineer   | Development |
| Amanda    | Engineer   | Development |
| Michael   | Sales      | Sales       |
| Robert    | Engineer   | Development |
| James     | Engineer   | Development |
| Nicole    | Accountant | Accounting  |
| John      | Marketer   | NULL        |
| Elizabeth | Sales      | Sales       |
| Joseph    | Sales      | Sales       |
+-----------+------------+-------------+
```


#### 外部結合（右外部結合）

```sql
select s.name, s.job, d.name from staff s right outer join department d on s.department_id = d.id;
```

```
+-----------+------------+-------------+
| name      | job        | name        |
+-----------+------------+-------------+
| Sarah     | Engineer   | Development |
| Amanda    | Engineer   | Development |
| Michael   | Sales      | Sales       |
| Robert    | Engineer   | Development |
| James     | Engineer   | Development |
| Nicole    | Accountant | Accounting  |
| Elizabeth | Sales      | Sales       |
| Joseph    | Sales      | Sales       |
| NULL      | NULL       | Legal       |
+-----------+------------+-------------+
```

---

## エクササイズ

[エクササイズ](ex/02_sql_ex.md)
