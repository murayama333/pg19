# Float

## float1.html

+ `float: left;`を指定した要素は浮き上がった状態（float）になる
+ 後続の要素は空いたスペースに回り込むようになる

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <img src="img/sample.png" style="float: left">
  <p>This photo was taken with a smartphone.</p>
</body>
</html>
```

### sample.png

![](src/ex/06/img/sample.png)

> 右クリックのメニューから`sample.png`という名前で保存します。

---

## float2.html

+ `float`を指定した後続の要素に`clear: both`プロパティを指定することで回り込みを解除できる

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
    .one {
      float: left;
    }
    .two {
      float: right;
    }
    .three {
      clear: both;
    }
  </style>
</head>
<body>
  <div class="one">1</div>
  <div class="two">2</div>
  <div class="three">3</div>
</body>
</html>
```

---

## float3.html

+ `float`と`clear`プロパティを上手く使えばレイアウトを制御できる

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="float.css">
</head>
<body>
  <div class="header">Header</div>
  <div class="sidebar">Seidebar</div>
  <div class="main">Main</div>
  <div class="footer">Footer</div>
</body>
</html>
```

> ただしレイアウトの制御については`flex`プロパティなど代替案もある。


### float.css

```css
div {
  border: 1px solid gray;
}

.header {
  background-color: #aaa;
}

.sidebar {
  background-color: #ddd;
  float: left;
  width: 200px;
  height: 400px;
}

.main {
  background-color: #eee;
}

.footer {
  background-color: #bbb;
  clear: both;
}
```

---

## エクササイズ

[エクササイズ](ex/06_css_ex.md)
