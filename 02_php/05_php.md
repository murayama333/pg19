# 制御構文 - 反復構造 - for文

### for1.php

```php
<?php
for ($i = 0; $i < 5; $i++) {
  echo "*";
}
```

### 実行

```
> php for1.php
*****
```

---


### for2.php

```php
<?php
$total = 0;
for ($i = 1; $i <= 10; $i++) {
  $total = $total + $i;
}
echo $total;
```

### 実行

```
> php for2.php
55
```

---


### for3.php

```php
<?php
for ($i = 1; $i <= 9; $i++) {
  for ($j = 1; $j <= 9; $j++) {
    echo $i * $j;
    echo " ";
  }
  echo PHP_EOL;
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

+ [for](https://www.php.net/manual/ja/control-structures.for.php)

---

### 演習

+ [エクササイズ - 制御構文 - 反復構造 - for文](ex/05_php_ex.md)
