# Media Queries

## mq1.html

+ Media Queriesを使えば、画面のサイズに合わせてCSSを適用できる
+ `@media only screen and (max-width:600px) {...}`とすれば、画面サイズが600px以下の場合に適用される
+ Responsive Web Design

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    h1 {
      color: red;
      font-size: 48px;
    }

    @media only screen and (max-width:800px) {
      h1 {
        color: green;
        font-size: 18px;
      }
    }

    @media only screen and (max-width:600px) {
      h1 {
        color: blue;
        font-size: 12px;
      }
    }
  </style>
</head>
<body>
  <h1>Hello World!</h1>
</body>
</html>
```

> 一般的に、PCサイズのCSSをまず定義し、Media Queriesによってスマートフォンやタブレットのサイズに合わせたスタイルを上書きします。

---

## mq2.html

+ `display`プロパティを組み合わせると画面サイズに合わせて項目の表示/非表示を指定できる

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    h2 {
      display: none;
    }

    @media only screen and (max-width:600px) {
      h1 {
        display: none;
      }

      h2 {
        display: block;
      }
    }
  </style>
</head>
<body>
  <h1>Header 1</h1>
  <h2>Header 2</h>
</body>
</html>
```

---

## mq3.html

+ `flex`プロパティと組み合わせると画面サイズに合わせてレイアウトを変更できる

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    div {
      border: 1px solid gray;
      text-align: center;
    }

    .row {
      display: flex;
    }

    .row div {
      flex: 1;
    }

    @media only screen and (max-width:600px) {
      .row {
        display: block;
      }
    }
  </style>
</head>
<body>
  <div class="row">
    <div>1</div>
    <div>2</div>
    <div>3</div>
  </div>
</body>
</html>
```

---

## エクササイズ

[エクササイズ](ex/07_css_ex.md)
