# 配列 - 添字配列

### array1.php

```php
<?php
$cities = ["Tokyo", "Osaka", "Kyoto"];
echo $cities[0];
echo $cities[1];
echo $cities[2];
```

### 実行

```
> php array1.php
Tokyo
Osaka
Kyoto
```

---


### array2.php

```php
<?php
$cities = ["Tokyo", "Osaka", "Kyoto"];
for ($i = 0; $i < 3; $i++) {
  echo $cities[$i];
}
```

### 実行

```
> php array2.php
Tokyo
Osaka
Kyoto
```

---


### array3.php

```php
<?php
$cities = ["Tokyo", "Osaka", "Kyoto"];
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

```php
<?php
$cities = [];
$cities[] = "Tokyo";
$cities[] = "Osaka";
$cities[] = "Kyoto";

$cities[0] = "Okayama";

var_dump($cities);
```

### 実行

```
> php array4.php
array(3) {
  [0]=>
  string(7) "Okayama"
  [1]=>
  string(5) "Osaka"
  [2]=>
  string(5) "Kyoto"
}
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
