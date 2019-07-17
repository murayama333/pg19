# 制御構文 - 反復構造

### while1.php

```php
<?php
$count = 0;

while ($count < 5) {
  echo "*";
  $count++;
}
```

### 実行

```
> php while1.php
*****
```

---


### while2.php

```php
<?php
$i = 1;

$total = 0;
while ($i <= 10) {
  $total = $total + $i;
  $i++;
}

echo $total;
```

### 実行

```
> php while2.php
55
```

---


### while3.php

```php
<?php
$i = 1;
while ($i <= 9) {
  $j = 1;
  while ($j <= 9) {
    echo $i * $j;
    $j++;
  }
  echo PHP_EOL;
  $i++;
}
```

### 実行

```
> php while3.php
1 2 3 4 5 6 7 8 9
2 4 6 8 10 12 14 16 18
3 6 9 12 15 18 21 24 27
4 8 12 16 20 24 28 32 36
5 10 15 20 25 30 35 40 45
6 12 18 24 30 36 42 48 54
7 14 21 28 35 42 49 56 63
8 16 24 32 40 48 56 64 72
9 18 27 36 45 54 63 72 81
```

---

### 考察

+ [while](https://www.php.net/manual/ja/control-structures.while.php)
+ [break](https://www.php.net/manual/ja/control-structures.break.php)
+ [continue](https://www.php.net/manual/ja/control-structures.continue.php)

---

### 演習

+ [エクササイズ - 制御構文 - 反復構造 - while文](../ex/04_php_ex.md)
