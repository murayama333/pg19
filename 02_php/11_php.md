# 関数 - ユーザー定義関数

### func1.php

+ 足し算をする`add`関数を定義します。
+ `add`関数の引数に`10`と`20`を指定して呼び出します。
+ `add`関数の戻り値を`$result`に代入します。

```php
<?php
function add($x, $y)
{
  $z = $x + $y;
  return $z;
}

$result = add(10, 20);
echo $result;
```

### 実行

```
> php func1.php
30
```

---


### func2.php

+ 配列の合計値を求める`sum`関数を定義します。
+ `sum`関数の引数に`$prices`を指定して呼び出します。
+ `sum`関数の戻り値を`$result`に代入します。


```php
<?php
function sum($array)
{
  $total = 0;
  for ($i = 0; $i < count($array); $i++) {
    $total += $array[$i];
  }
  return $total;
}

$prices = [1000, 2000, 3000];
$result = sum($prices);
echo $result;
```

### 実行

```
> php func2.php
6000
```

---


### func3.php

+ 指定した回数"Hello"と出力する`hello`関数を定義します。
+ `hello`関数の引数に`5`を指定して呼び出します。
+ `hello`関数の戻り値はありません。


```php
<?php
function hello($repeat)
{
  for ($i = 0; $i < $repeat; $i++) {
    echo "Hello";
  }
}

hello(5);
```

### 実行

```
> php func3.php
HelloHelloHelloHelloHello
```

---

### func4.php

+ 現在の年を取得する`get_year`関数を定義します。
+ `get_year`関数を引数なしで呼び出します。
+ `get_year`関数の戻り値を`$year`に代入します。


```php
<?php
function get_year()
{
  return date('Y');
}

$year = get_year();
echo $year;
```

### 実行

```
> php func4.php
2019
```

---

### func5.php

+ "Hello World!"を出力する`hello_world`関数を定義します。
+ `hello_world`関数を引数なしで呼び出します。
+ `hello_world`関数の戻り値はありません。


```php
<?php
function hello_world()
{
  echo "Hello World!";
}

hello_world();
```

### 実行

```
> php func5.php
Hello World!
```

---

### func6.php

+ 再帰的に値を出力する`recursion`関数を定義します。
+ `recursion`関数の引数に`1`を指定して呼び出します。
+ `recursion`関数の戻り値はありません。

```php
<?php
function recursion($a)
{
    if ($a < 10) {
        echo $a . PHP_EOL;
        recursion($a + 1);
    }
}

recursion(1);
```

> recursion関数は再帰的な関数です。

### 実行

```
> php func6.php
1
2
3
4
5
6
7
8
9
```

---

### 考察

+ [ユーザ定義ー関数](https://www.php.net/manual/ja/functions.user-defined.php)

---

### 演習

+ [エクササイズ - 関数 - ユーザ定義関数](ex/11_php_ex.md)
