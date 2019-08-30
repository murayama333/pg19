# 配列 - 連想配列

### a_array1.php

+ 連想配列は`要素番号`ではなく`キー`で管理する配列です。
+ `キー(Key)`とは文字列データと考えると良いでしょう。
+ PHPの連想配列は`キー`と`値`を `=>` で並べて記述します。

```php
<?php
$cities = ["Osaka" => 270, "Sakai" => 84, "Higashiosaka" => 50];
echo $cities["Osaka"] . PHP_EOL;
echo $cities["Sakai"] . PHP_EOL;
echo $cities["Higashiosaka"] . PHP_EOL;
```

### 実行

```
> php a_array1.php
270
84
50
```

---


### a_array2.php

+ 連想配列の要素数（キーと値の組み合わせの数）を求めるには`count`関数を使います。

```php
<?php
$cities = ["Osaka" => 270, "Sakai" => 84, "Higashiosaka" => 50];
$x = count($cities);
echo $x;
```

### 実行

```
> php a_array2.php
3
```

---


### a_array3.php

+ 存在しないキーを指定することで、連想配列に要素を追加できます。

```php
<?php
$cities = ["Osaka" => 270, "Sakai" => 84, "Higashiosaka" => 50];
$cities["Hirakata"] = 40;
var_dump($cities);
```

### 実行

```
> php a_array3.php
array(4) {
  ["Osaka"]=>
  int(270)
  ["Sakai"]=>
  int(84)
  ["Higashiosaka"]=>
  int(50)
  ["Hirakata"]=>
  int(40)
}
```

---

### a_array4.php

+ 既存のキーを指定することで、連想配列の要素を更新できます。

```php
<?php
$cities = ["Osaka" => 270, "Sakai" => 84, "Higashiosaka" => 50];
$cities["Osaka"] = 264;
var_dump($cities);
```

### 実行

```
> php a_array4.php
array(3) {
  ["Osaka"]=>
  int(264)
  ["Sakai"]=>
  int(84)
  ["Higashiosaka"]=>
  int(50)
}
```


---

### a_array5.php

+ 連想配列は要素番号を持たないため、通常の`for`文ではループ処理できません。
+ 代わりに`foreach`構文を使って処理することができます。
+ `foreach`構文は`as`キーワードの前に配列変数、`as`キーワードの後にループの中で使用するキーと値の変数名を定義します。

```php
<?php
$cities = ["Osaka" => 270, "Sakai" => 84, "Higashiosaka" => 50];
foreach ($cities as $key => $value) {
  echo "$key : $value" . PHP_EOL;
}
```

### 実行

```
> php a_array5.php
Osaka : 270
Sakai : 84
Higashiosaka : 50
```


---


### 考察

+ [配列](https://php.net/manual/ja/language.types.array.php)
+ [count関数](https://www.php.net/manual/ja/function.count.php)
+ [var_dump関数](https://www.php.net/manual/ja/function.var-dump.php)
+ [print_r関数](https://www.php.net/manual/ja/function.print-r.php)

---

### 演習

+ [エクササイズ - 配列 - 連想配列](ex/07_php_ex.md)
