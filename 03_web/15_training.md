# トレーニング2 - Bootstrap

次の画面（training2.html、style2.css）を作成してください。

ページ下部にある以下のヒントを参考にしてください。

+ ヒント1 - navbar
+ ヒント2 - container-fluid
+ ヒント3 - card

---

<img src="img/train2.png" >

---

## training2.html

以下のテンプレートをコピーしてtraining2.htmlを作成してください。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>売上管理システム</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <!-- -->
</body>
</html>
```


## 画像素材

画像素材はありません。

## 文章素材

以下の文章をコピーして利用できます。

### 文章素材 - トップ

```
売上管理システム
```

### 文章素材 -  サイドバー

```
売上管理
顧客管理
拠点管理
設定
```

> サイドバーの各項目はリンクとして作成しますが、リンク先は#としておいてください。&lt;a href="#"&gt;顧客管理&lt;/a&gt;

### 文章素材 - 検索条件

```
顧客ID
顧客名
メールアドレス
地域
  すべて
  西日本
  東日本
```

### 文章素材 - 検索結果

```
顧客ID	顧客名	メールアドレス	地域
0000001	田中一郎	user1@example.com	西日本
0000002	山田二郎	user2@example.com	東日本
0000003	鈴木三郎	user3@example.com	西日本
0000004	高木四郎	user4@example.com	東日本
0000005	吉田五朗	user5@example.com	西日本
0000006	高橋六郎	user6@example.com	東日本
0000007	伊藤七郎	user7@example.com	西日本
```

## ヒント1 - navbar

次のファイルをnavbar.htmlという名前で保存してみましょう。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>YOUR SCHOOL</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
  </nav>

</body>
</html>
```

## ヒント2 - container-fluid

次のファイルをcontainer.htmlという名前で保存してみましょう。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sample</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <div class="container" style="background-color: #eeeeee">
    This is container.
  </div>

  <div class="container-fluid" style="background-color: #dddddd">
    This is container-fluid.
  </div>

</body>
</html>
```


## ヒント3 - card

次のファイルをcard.htmlという名前で保存してみましょう。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sample</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <div class="container mt-4">
    <div class="row">
      <div class="col-sm-3">
        <div class="card card-body bg-light">
          Card
        </div>
      </div>
    </div>
  </div>

</body>
</html>
```
