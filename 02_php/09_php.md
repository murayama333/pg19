# 関数 - ファイル入出力関数

### file1.php

+ `file_put_contents`関数はファイルにテキストデータを保存します。

```php
<?php
$text = "Everything is practice.";
$file = "sample.txt";
file_put_contents($file, $text);
```

### 実行

```
> php file1.php
```

> カレントフォルダ上に"sample.txt"ファイルが生成されます。

---


### file2.php

+ `file_get_contents`関数はテキストファイルを読み込みます。

```php
<?php
$file = "sample.txt";
$text = file_get_contents($file);
echo $text;
```

### 実行

```
> php file2.php
Everything is practice.
```

---


### file3.php

+ `fopen`関数はファイルを開きます。
+ `fwrite`関数はファイルポインタリソースにデータを書き込みます。
+ `fclose`関数はファイルを閉じます。

```php
<?php
$cities = ["Osaka", "Sakai", "Hirakata"];

$file = "cities.txt";
$handle = fopen($file, "w");

foreach ($cities as $city) {
  fwrite($handle, $city . PHP_EOL);
}

fclose($handle);
```

### 実行

```
> php file3.php
```

> カレントフォルダ上に"cities.txt"ファイルが生成されます。

---

### file4.php

+ `fopen`関数はファイルを開きます。
+ `fgets`関数はファイルポインタリソースからデータを1行読み込みます。
+ `fclose`関数はファイルを閉じます。

```php
<?php
$file = "cities.txt";
$handle = fopen($file, "r");

$line = fgets($handle);
while ($line !== false) {
  echo $line;
  $line = fgets($handle);
}

fclose($handle);
```

### 実行

```
> php file4.php
Osaka
Sakai
Hirakata
```

---

### file5.php

+ ファイル入出力は失敗する場合があります。

```php
<?php
$file = "xxx.txt";
$handle = @fopen($file, "r");
if ($handle === false) {
  die("File is not opened.")
}

$line = fgets($handle);
while ($line !== false) {
  echo $line;
  $line = fgets($handle);
}

fclose($handle);
```

### 実行

```
> php file5.php
File is not opened.
```

---


### 考察

+ [ファイルシステム関数](https://www.php.net/manual/ja/ref.filesystem.php)

---

### 演習

+ [エクササイズ - 関数 - ファイル入出力](ex/09_php_ex.md)
