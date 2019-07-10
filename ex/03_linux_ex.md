# エクササイズ - PHP

## hello.php

次のプログラムを作成してください。

```php
<?php
$name = "Alice";
echo "Hello ";
echo $name;
```

プログラムを作成したらphpコマンドで実行します。

```
$ php hello.php
Hello Alice
```

---

## hello2.php

次のプログラムを作成してください。

```php
<?php
$title = "Hello PHP";
for ($i = 0; $i < 5; $i++) {
  echo $title;
}
```

プログラムを作成したらphpコマンドで実行します。

```
$ php hello2.php
Hello PHPHello PHPHello PHPHello PHPHello PHP
```

---

## hello3.php

```php
<?php
$title = "Hello PHP";
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
  </head>
  <body>
    <h1><?php echo $title ?></h1>
  </body>
</html>
```

プログラムを作成したらphpコマンドで実行します。

```
$ php hello3.php
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Hello PHP</title>
  </head>
  <body>
    <h1>Hello PHP</h1>
  </body>
</html>
```

---

## mkdir.php

次のプログラムを作成してください。

```php
<?php
$names = ["Apple", "Banana", "Cherry"];

for ($i = 0; $i < 3; $i++) {
  mkdir($names[$i]);
}
```

プログラムを作成したらphpコマンドで実行します。

```
$ php hello4.php
```

> lsコマンドを実行して`Apple`, `Banana`, `Cherry`ディレクトリが作成されていることを確認してみましょう。