# エクササイズ - 関数 - ファイル入出力関数

## file_ex1.php

次の文字列データがあります。

```php
<?php
$text = "Information is not knowledge.";
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php file_ex1.php
```

> カレントフォルダに`message.txt`ファイルが作成されており、以下の内容がファイルに保存されていること

#### message.txt

```
Information is not knowledge.
```

---

## file_ex2.php

カレントフォルダに次の`message.txt`ファイルが存在します。

#### message.txt

```
Information is not knowledge.
```

ファイルを読み込んで、次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php file_ex2.php
Information is not knowledge.
```

> ファイルの内容をそのまま出力します。

---


## file_ex3.php

カレントフォルダに次の`message.txt`ファイルが存在します。

#### message.txt

```
Information is not knowledge.
```

ファイルを読み込んで、次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php file_ex3.php
INFORMATION IS NOT KNOWLEDGE.
```

> ファイルの内容を大文字に変換して出力します。

---


## file_ex4.php

カレントフォルダに次の`message.txt`ファイルが存在します。

#### message.txt

```
Information is not knowledge.
```

ファイルを読み込んで、次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php file_ex4.php
Information
```

> ファイルの内容の先頭11文字を出力します。

---

## file_ex5.php

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php file_ex5.php
```

> カレントフォルダに`number.txt`ファイルが作成されており、以下の内容がファイルに保存されていること

#### number.txt

```
1
2
3
4
5
6
7
8
9
10
```

---


## file_ex6.php

カレントフォルダに次の`number.txt`ファイルが存在します。

#### number.txt

```
1
2
3
4
5
6
7
8
9
10
```

ファイルを読み込んで、次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php file_ex6.php
55
```

> ファイルの各行の数値の合計値を出力します。

#### ヒント

+ ファイルの各行の終端には改行コードが存在します。
+ 文字列の末尾の改行コードを削除するには[rtrim](https://www.php.net/manual/ja/function.rtrim.php)関数を使います。

---


## file_ex7.php

次の配列データがあります。

```php
<?php
$monsters = [
  ["name" => "slyme", "hp" => 10],
  ["name" => "dragon", "hp" => 100],
  ["name" => "golem", "hp" => 300]
];
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php file_ex7.php
```

> カレントフォルダに`monster.csv`ファイルが作成されており、以下の内容がファイルに保存されていること

#### monster.csv

```
slyme,10
dragon,100
golem,300
```

---

## file_ex8.php

カレントフォルダに次の`monster.csv`ファイルが存在します。

#### monster.csv

```
slyme,10
dragon,100
golem,300
```

ファイルを読み込んで、次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php file_ex8.php
410
```

> `monster.csv`ファイルの2列目の数値の合計値を取得します。

---

## file_ex9.php

カレントフォルダに次の`monster.csv`ファイルが存在します。

#### monster.csv

```
slyme,10
dragon,100
golem,300
```

ファイルを読み込んで、次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php file_ex8.php
300
```

> `monster.csv`ファイルの2列目の数値の最大値を取得します。

---

