# 変数と演算子

### var1.php

```php
<?php
$price = 200;
$count = 5;
$total = $price * $count;
$message = "TOTAL PRICE";

echo $message;
echo PHP_EOL;
echo $total;
?>
```

### 実行

```
> php var1.php
1000
```

### var2.php

```php
<?php
$count = 1;
$count = $count + 1;

echo $count;
?>
```

### 実行

```
> php var2.php
2
```

### 考察

+ [変数](https://www.php.net/manual/ja/language.variables.php)
+ [型](https://www.php.net/manual/ja/language.types.intro.php)
+ [演算子](https://www.php.net/manual/ja/language.operators.php)
+ [定義済みの定数](https://www.php.net/manual/ja/reserved.constants.php)
+ [echo](https://www.php.net/manual/ja/function.echo.php)
