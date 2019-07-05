# エクササイズ

## hello.php

次のプログラムを作成してください。

```php
<?php
$name = "Alice";
echo "Hello ";
echo $name;
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

次のプログラムを作成してください。

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