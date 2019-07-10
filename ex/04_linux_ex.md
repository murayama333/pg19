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

## Webサーバ（PHPビルトインサーバ）の起動

```
php -S localhost:8000
```

> Webサーバが起動したら、ブラウザからhttp://localhost:8000/login.htmlにアクセスします。


<!--
## 参考：クラウド（AWS）上でのWebサーバ（PHPビルトインサーバ）の起動

+ ip addrコマンドでIPアドレスを確認します。

```
$ ip addr
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host
       valid_lft forever preferred_lft forever
2: eth0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 9001 qdisc fq_codel state UP group default qlen 1000
    link/ether 06:96:e1:26:b4:20 brd ff:ff:ff:ff:ff:ff
    inet 172.30.0.91/24 brd 172.30.0.255 scope global dynamic eth0
       valid_lft 2495sec preferred_lft 2495sec
    inet6 fe80::496:e1ff:fe26:b420/64 scope link
       valid_lft forever preferred_lft forever
```

> 上記の場合、2: eth0 の 172.30.0.91 がIPアドレスです。

+ phpコマンドでWebサーバ（PHPビルトインサーバ）を起動します。

```
$ sudo php -S 172.30.0.91:80
PHP 7.2.19-0ubuntu0.18.04.1 Development Server started at Wed Jul 10 20:52:13 2019
Listening on http://172.30.0.91:80
Document root is /home/ubuntu/murayama
```

> IPアドレスの部分は置き換えてください。

-->