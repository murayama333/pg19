# CSS

CSS(Cascading Style Sheets)はWebページを装飾するためのプログラミング言語です。

CSSを適用するには3つの方法があります。

+ インラインスタイルシート
+ 内部スタイルシート
+ 外部スタイルシート

### web21.html

+ インラインスタイルシートは`style`属性を使います。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Hello CSS</h1>
  <div style="font-size: 24px; color: red;">
    Hello HTML
  </div>
  <div>
    Hello <span style="background-color: #00FF00;">PHP</span>
  </div>
</body>
</html>
```

> スタイルは「キー: 値;」の形式で記述します。

---

### web22.html

+ 内部スタイルシートは`style`タグを使います。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    div {
      font-size: 24px;
      color: red;
    }
    span {
      background-color: #00FF00;
    }
  </style>
</head>
<body>
  <h1>Hello CSS</h1>
  <div>
    Hello HTML
  </div>
  <div>
    Hello <span>PHP</span>
  </div>
</body>
</html>
```

---

### web23.html

+ 外部スタイルシートは`link`タグを使います。
+ `link`タグの`href`属性に参照するCSSファイルを指定します。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="hello.css">
</head>
<body>
  <h1>Hello CSS</h1>
  <div>
    Hello HTML
  </div>
  <div>
    Hello <span>PHP</span>
  </div>
</body>
</html>
```

#### hello.css

```css
div {
  font-size: 24px;
  color: red;
  background-color: #DDDDDD;
  padding: 60px;
  margin: 30px;
  border: solid 1px grey;
}

span {
  background-color: #00FF00;
}
```

---

## エクササイズ

[エクササイズ](ex/02_css_ex.md)
