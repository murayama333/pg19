# エクササイズ - アルゴリズム

## algo_ex1.php

次の変数があります。

```php
<?php
$x = "Alice";
$y = "Bob";

???

echo $x . PHP_EOL;
echo $y . PHP_EOL;
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php algo_ex1.php
Bob
Alice
```

> 2つの変数の値を入れ替えます。

---

## algo_ex2.php

次の変数があります。

```php
<?php
$array = [3, 6, 1, 2, 9, 5, 4, 8, 7];

???

print_r($array);
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php algo_ex2.php
Array
(
    [0] => 9
    [1] => 8
    [2] => 7
    [3] => 6
    [4] => 5
    [5] => 4
    [6] => 3
    [7] => 2
    [8] => 1
)
```

---

## algo_ex3.php

次の変数があります。

```php
<?php
<?php
$array = [60, 74, 67, 52, 95, 73, 45, 72, 81, 90, 70];
$target = 80;
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php algo_ex3.php
3
```

> 80以上の要素の数を出力します。

---

## algo_ex4.php

次の変数があります。

```php
<?php
$array = [60, 74, 67, 52, 95, 73, 45, 72, 81, 90, 70];
$target = 80;
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php algo_ex4.php
Array
(
    [0] => 95
    [1] => 81
    [2] => 90
)
```

> 80以上の要素を集めた配列を出力します。

---

## algo_ex5.php

次のファイルを作成します。

### protocol.txt

```
Hyper Text Transfer Protocol
File Transfer Protocol
Simple Mail Transfer Protocol
Transmission Control Protocol
Internet Protocol
```

次の変数があります。

```php
<?php
$file = "protocol.txt";
$lines = file($file, FILE_IGNORE_NEW_LINES);
$target = "transfer";
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php algo_ex5.php
Array
(
    [0] => Hyper Text Transfer Protocol
    [1] => File Transfer Protocol
    [2] => Simple Mail Transfer Protocol
)
```

> "transfer"を含む行を新たな配列に追加します。"transfer"の大文字小文字の違いは無視するものとします。

---

