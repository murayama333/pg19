# 制御構文 - 分岐構造 - if文

### if1.php

```php
<?php
$point = 80;

if ($point >= 50) {
  echo "Good";
}
```

### 実行

```
> php if1.php
Good
```

---

### if2.php

```php
<?php
$point = 30;

if ($point >= 50) {
  echo "Good";
} else {
  echo "Bad";
}
```

### 実行

```
> php if2.php
Bad
```

---


### if3.php

```php
$point = 100;

if ($point >= 90) {
  echo "Great";
} else if ($point >= 50) {
  echo "Good";
} else {
  echo "Bad";
}
```

### 実行

```
> php if3.php
Great
```

---


### if4.php

```php
<?php
$math = 85;
$english = 90;

if ($math >= 80 && $english >= 80) {
  echo "Good";
} else {
  echo "Bad";
}
```

### 実行

```
> php if4.php
Good
```

---

### if5.php

```php
<?php
$point1 = 80;
$point2 = "80";

if ($point1 == $point2) {
  echo "Yes";
} else {
  echo "No";
}
```

### 実行

```
> php if5.php
Yes
```

---

### 考察

+ [if](https://www.php.net/manual/ja/control-structures.if.php)
+ [論理型(boolean)](https://www.php.net/manual/ja/language.types.boolean.php)
+ [比較演算子](https://www.php.net/manual/ja/language.operators.comparison.php)
+ [論理演算子](https://www.php.net/manual/ja/language.operators.logical.php)
