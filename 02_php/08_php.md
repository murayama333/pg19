# 関数 - 文字列関数

### str1.php

+ `strtoupper`関数は文字列データを大文字に変換します。

```php
<?php
$name = "PHP Hypertext Preprocessor";
$result = strtoupper($name);
echo $result . PHP_EOL;
```

### 実行

```
> php str1.php
PHP HYPERTEXT PREPROCESSOR
```

> 小文字に変換する関数もあります。

---


### str2.php

+ `strlen`関数は文字列データの文字数を取得します。

```php
<?php
$name = "PHP Hypertext Preprocessor";
$result = strlen($name);
echo $result . PHP_EOL;
```

### 実行

```
> php str2.php
26
```

---


### str3.php

+ `substr`関数は部分文字列を取得します。

```php
<?php
$name = "PHP Hypertext Preprocessor";
$result = substr($name, 4, 9);
echo $result . PHP_EOL;
```

### 実行

```
> php str3.php
Hypertext
```

---

### str4.php

+ `explode`関数は文字列を配列に分割します。

```php
<?php
$name = "PHP Hypertext Preprocessor";
$array = explode(" ", $name);
echo $array[0] . PHP_EOL;
echo $array[1] . PHP_EOL;
echo $array[2] . PHP_EOL;
```

### 実行

```
> php str4.php
PHP
Hypertext
Preprocessor
```


---

### str5.php

+ `implode`関数は配列を文字列に変換します。

```php
<?php
$array = ["PHP", "Hypertext", "Preprocessor"];
$result = implode(" ", $array);
echo $result . PHP_EOL;
```

### 実行

```
> php str5.php
PHP Hypertext Preprocessor
```

---


### 考察

+ [String関数](https://www.php.net/manual/ja/ref.strings.php)

---

### 演習

+ [エクササイズ - 配列 - 文字列関数](ex/08_php_ex.md)
