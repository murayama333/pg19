# 配列 - 添字配列

### array1.php

+ 配列は一つの変数で複数のデータを管理する仕組みです。
+ 配列の中の一つひとつのデータを要素と呼びます。
+ 要素には先頭から要素番号（0から始まる番号）が割り振られています。

```php
<?php
$cities = ["Osaka", "Sakai", "Higashiosaka"];
echo $cities[0] . PHP_EOL;
echo $cities[1] . PHP_EOL;
echo $cities[2] . PHP_EOL;
```

### 実行

```
> php array1.php
Osaka
Sakai
Higashiosaka
```

---


### array2.php

+ 配列は`for`文を使ってループで処理できます。
+ 配列の要素番号に`for`文のカウンター変数（`$i`）を使います。
+ 配列の要素番号は`0`から始まる点に注意します。

```php
<?php
$cities = ["Osaka", "Sakai", "Higashiosaka"];
for ($i = 0; $i < 3; $i++) {
  echo $cities[$i] . PHP_EOL;
}
```

### 実行

```
> php array2.php
Osaka
Sakai
Higashiosaka
```

---


### array3.php

+ 配列の要素数を求めるには`count`関数を使います。

```php
<?php
$cities = ["Osaka", "Sakai", "Higashiosaka"];
$x = count($cities);
echo $x;
```

### 実行

```
> php array3.php
3
```

---


### array4.php

+ 配列の要素番号を指定せずに値を代入することで、配列に要素を追加できます。

```php
<?php
$cities = [];
$cities[] = "Osaka";
$cities[] = "Sakai";
$cities[] = "Higashiosaka";

var_dump($cities);
```

### 実行

```
> php array4.php
array(3) {
  [0]=>
  string(5) "Osaka"
  [1]=>
  string(5) "Sakai"
  [2]=>
  string(12) "Higashiosaka"
}
```

---

+ 既存の要素番号を指定することで、配列の要素を更新できます。

### array5.php

```php
<?php
$cities = ["Osaka", "Sakai", "Higashiosaka"];
$cities[0] = "Hirakata";

var_dump($cities);
```

### 実行

```
> php array5.php
array(3) {
  [0]=>
  string(8) "Hirakata"
  [1]=>
  string(5) "Sakai"
  [2]=>
  string(12) "Higashiosaka"
}
```

---


### array6.php

+ 配列は`foreach`構文を使って処理することができます。
+ `foreach`構文は`as`キーワードの前に配列変数を指定します。
+ `as`キーワードの後に配列の要素を代入する変数名を定義します。

```php
<?php
$cities = ["Osaka", "Sakai", "Higashiosaka"];
foreach ($cities as $city) {
  echo $city . PHP_EOL;
}
```

### 実行

```
> php array6.php
Osaka
Sakai
Higashiosaka
```

---

### 考察

+ [配列](https://php.net/manual/ja/language.types.array.php)
+ [count関数](https://www.php.net/manual/ja/function.count.php)
+ [var_dump関数](https://www.php.net/manual/ja/function.var-dump.php)
+ [print_r関数](https://www.php.net/manual/ja/function.print-r.php)

---

### 演習

+ [エクササイズ - 配列 - 添字配列](ex/06_php_ex.md)
