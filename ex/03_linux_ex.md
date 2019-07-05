# エクササイズ

## login.html

次のプログラムを作成してください。

```html
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h3>Login</h3>
    <hr>
    <form action="login.php" method="post">
      ID:<input type="text" name="id">
      PASS:<input type="password" name="pass">
      <input type="submit" value="login">
    </form>
  </body>
</html>
```

---

## login.php

次のプログラムを作成してください。

```php
<?php
$id = $_POST["id"];
$pass = $_POST["pass"];

$message = "Error";
if ($id == "user1" && $pass == "pass1") {
    $message = "Success";
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h3>Login</h3>
    <hr>
    <h4><?php echo $message; ?></h4>
  </body>
</html>
```

