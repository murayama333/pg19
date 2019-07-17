# エクササイズ - Apache + PHP

## 1 パッケージ管理システムの更新

+ aptコマンドの設定を最新の状態に更新する

```
$ sudo apt update
```

## 1 Apacheのインストール

+ aptコマンドでApacheをインストールする

```
$ sudo apt install apache2
```

> Apacheをインストールすることで、ブラウザからアクセスできるようになる

### Apacheのドキュメントルート

+ Apacheはファイルシステム上の特定のディレクトリを公開する
  + このディレクトリのことをドキュメントルート（Document Root）と呼ぶ
    + デフォルトは /var/www/html

### Apacheのログファイル

+ Apacheのログファイルはデフォルトで/var/log/apache2に作成される
  + アクセスログはaccess.logファイル
  + エラーログはerror.logファイル

```
$ tail -f /var/log/apache2/access.log
```

### Apacheの設定ファイル

+ Apacheの設定はhttpd.confファイルで変更できる
  + ただしUbuntuではhttpd.confではなくapache2.confという名前になっている
    + /etc/apache2/apache2.conf

```
$ sudo vi /etc/apache2/apache2.conf
```

```
$ sudo vi /etc/apache2/sites-enabled/000-default.conf
```


## 2 PHPのインストール

+ aptコマンドでPHPをインストールする

```
$ sudo apt install php
```

> 本来Apache上でPHPを実行するには、追加モジュールをインストールし、Apacheの設定ファイルの編集する必要があるが、最新のUbuntuではその作業は不要となっている。

### hello.php

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

> /var/www/html/hello.phpとして保存する

