# エクササイズ - 関数 - ユーザー定義関数

## func_ex1.php

次の仕様に従って`subtract`関数を作成してください。

|関数名|subtract|
|:--|:--|
|処理概要|引数$xから$yを減算した値を返す|
|引数|$x, $y|
|戻り値|xから$y減算した値|

```php
<?php
function subtract($x, $y)
{
  ???
}

$a = 100;
$b = 10;
$result = subtract($a, $b);
echo $result;
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php func_ex1.php
90
```

> subtractは"引き算"という意味です。

---

## func_ex2.php

次の仕様に従って`exclaim`関数を作成してください。

|関数名|exclaim|
|:--|:--|
|処理概要|引数$messageに"!!!"を付けた値を出力する|
|引数|$message|
|戻り値|なし|

```php
<?php
function exclaim($message)
{
    ???
}

exclaim("Hello");
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php func_ex2.php
Hello!!!
```

---


## func_ex3.php

次の仕様に従って`double`関数を作成してください。

|関数名|double|
|:--|:--|
|処理概要|引数$xを2倍した値を返す|
|引数|$x|
|戻り値|$xを2倍した値|


```php
<?php
// TODO double function

$value = 100;
$result = double($value);
echo $result;
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php func_ex3.php
200
```

---


## func_ex4.php

次の仕様に従って`array_double`関数を作成してください。

|関数名|array_double|
|:--|:--|
|処理概要|引数$arrayの要素を2倍にした配列を返す|
|引数|$array 配列データとする|
|戻り値|$arrayの要素を2倍にした配列|


```php
<?php
// TODO array_double function


$prices = [100, 200, 300];
$result = array_double($prices);
print_r($result);
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php func_ex4.php
Array
(
    [0] => 200
    [1] => 400
    [2] => 600
)
```

---

## func_ex5.php

次の仕様に従って`first_char`関数を作成してください。

|関数名|first_char|
|:--|:--|
|処理概要|引数$strの先頭文字を返す|
|引数|$str|
|戻り値|引数$strの先頭文字|

```php
<?php
// TODO first_char function

$value = "Apple";
echo first_char($value) . PHP_EOL;

$value = "Banana";
echo first_char($value) . PHP_EOL;
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php func_ex5.php
A
B
```

---


## func_ex6.php

次のプログラムがあります。

```php
// TODO abbreviate function

$value = "Hyper Text Markup Language";
echo abbreviate($value) . PHP_EOL;

$value = "Structured Query Language";
echo abbreviate($value) . PHP_EOL;
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php func_ex6.php
HTML
SQL
```

> 単語の頭文字を連結して出力します。

---


## func_ex7.php

テキストエディタでsale.txtファイルを作成します。

#### sale.txt

```
1000
2000
3000
```

次のプログラムがあります。

```php
// TODO calc_total function


$file = "sale.txt";
echo calc_total($file);
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php func_ex7.php
6000
```

> calc_total関数では引数で受け取ったsale.txtファイルを開き、合計値を求めます。

---

## func_ex8.php

テキストエディタでsale.csvファイルを作成します。

#### sale.csv

```
100,1000,10000
200,2000,20000
300,3000,30000
```

次のプログラムがあります。

```php
<?php
// TODO calc_column_total function


$file = "sale.csv";
echo calc_column_total($file, 1) . PHP_EOL;
echo calc_column_total($file, 2) . PHP_EOL;
echo calc_column_total($file, 3) . PHP_EOL;
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php func_ex8.php
600
6000
60000
```

> calc_column_total関数では引数で受け取ったsale.csvファイルを開き、引数で指定された列の合計値を求めます。

---
