# 関数 - 配列関数

### ar1.php

+ `array_slice`関数は配列の一部を返却します。

```php
<?php
$cities = ["Osaka", "Sakai", "Hirakata", "Kadoma"];
$result = array_slice($cities, 1, 2);
print_r($result);
```

### 実行

```
> php ar1.php
Array
(
    [0] => Sakai
    [1] => Hirakata
)
```

---


### ar2.php

+ `array_push`関数は配列の末尾に要素を追加します。

```php
<?php
$cities = ["Osaka", "Sakai", "Hirakata"];
array_push($cities, "Kadoma", "Moriguchi");
print_r($cities);
```

### 実行

```
> php ar2.php
Array
(
    [0] => Osaka
    [1] => Sakai
    [2] => Hirakata
    [3] => Kadoma
    [4] => Moriguchi
)
```

---


### ar3.php

+ `array_pop`関数は配列の末尾から要素を取り出します。

```php
<?php
$cities = ["Osaka", "Sakai", "Hirakata"];
$result = array_pop($cities);
echo $result . PHP_EOL;
print_r($cities);
```

### 実行

```
> php ar3.php
Hirakata
Array
(
    [0] => Osaka
    [1] => Sakai
)
```

---

### ar4.php


+ `array_unshift`関数は配列の先頭に要素を追加します。

```php
<?php
$cities = ["Osaka", "Sakai", "Hirakata"];
array_unshift($cities, "Kadoma", "Moriguchi");
print_r($cities);
```

### 実行

```
> php ar4.php
Osaka
Sakai
Hirakata
```

---

### ar5.php

+ `array_shift`関数は配列の先頭から要素を取り出します。

```php
<?php
$cities = ["Osaka", "Sakai", "Hirakata"];
$result = array_shift($cities);
echo $result . PHP_EOL;
print_r($cities);
```

### 実行

```
> php ar5.php
Osaka
Array
(
    [0] => Sakai
    [1] => Hirakata
)
```

---

### ar6.php

+ `sort`関数は配列をソートします。

```php
<?php
$cities = ["Osaka", "Sakai", "Hirakata", "Kadoma"];
sort($cities);
print_r($cities);
```

### 実行

```
> php ar6.php
Array
(
    [0] => Hirakata
    [1] => Kadoma
    [2] => Osaka
    [3] => Sakai
)
```

---


### 考察

+ [配列関数](https://www.php.net/manual/ja/ref.array.php)

---

### 演習

+ [エクササイズ - 関数 - 配列関数](ex/10_php_ex.md)
