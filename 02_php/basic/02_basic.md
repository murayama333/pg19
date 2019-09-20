# Basic 11 - 20

## no11.php

次の変数があります。

```php
<?php
$array = [80, 72, 65, 56, 98, 73];
```

実行結果のとおり出力してください。

### 実行結果

```
Mean: 74
```

---

## no12.php

次の変数があります。

```php
<?php
$array = [80, 72, 65, 56, 98, 73];
```

実行結果のとおり出力してください。

### 実行結果

```
Array
(
    [0] => 56
    [1] => 65
    [2] => 72
    [3] => 73
    [4] => 80
    [5] => 98
)
```

---

## no13.php

次の変数があります。

```php
<?php
$array = [[1, 2, 3], [40, 50, 60], [70, 80, 90, 100]];
```

実行結果のとおり出力してください。

### 実行結果

```
Total: 496
```

---


## no14.php

次の変数があります。

```php
<?php
$array = [[1, 2, 3], [40, 50, 60], [70, 80, 90, 100]];
```

実行結果のとおり出力してください。

### 実行結果

```
Total(Row): 6
Total(Row): 150
Total(Row): 340
```

---


## no15.php

次の変数があります。

```php
<?php
$fruits = ["melon" => 1000, "banana" => 200, "lemon" => 100];
```

実行結果のとおり出力してください。

### 実行結果

```
Total: 1300
```

---

## no16.php

次の変数があります。

```php
<?php
$fruits = ["melon" => 1000, "banana" => 200, "lemon" => 100];
```

実行結果のとおり出力してください。

### 実行結果

```
melon
banana
lemon
```

---

## no17.php

次の変数があります。

```php
<?php
$fruits = ["melon" => 1000, "banana" => 200, "lemon" => 100];
```

実行結果のとおり出力してください。

### 実行結果

```
melon:1000
banana:200
lemon:100
```

---

## no18.php

次の変数があります。

```php
<?php
$fruits = [["name" => "melon", "price" => 1000, "color" => "green"],
          ["name" => "banana", "price" => 200, "color" => "yellow"],
          ["name" => "lemon", "price" => 100, "color" => "yellow"]];
```

実行結果のとおり出力してください。

### 実行結果

```
Total: 1300
```

---

## no19.php

次の変数があります。

```php
<?php
$fruits = [["name" => "melon", "price" => 1000, "color" => "green"],
          ["name" => "banana", "price" => 200, "color" => "yellow"],
          ["name" => "lemon", "price" => 100, "color" => "yellow"]];
```

実行結果のとおり出力してください。

### 実行結果

```
banana
lemon
```

> "color"キーが"yellow"のものだけ出力します。

---

## no20.php

次の変数があります。

```php
<?php
$fruits = [["name" => "melon", "price" => 1000, "color" => "green"],
          ["name" => "banana", "price" => 200, "color" => "yellow"],
          ["name" => "lemon", "price" => 100, "color" => "yellow"]];
```

実行結果のとおり出力してください。

### 実行結果

```
Total(Yellow): 300
```

> "color"キーが"yellow"のものについて、"price"キーの値の合計を出力します。

---
