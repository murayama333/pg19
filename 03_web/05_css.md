# Flexレイアウト

## flex1.html

+ 親要素に`flex: display;`を指定する
+ 子要素に`flex: 1;`、`flex: 2;`などと指定する

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style media="screen">
  div {
    border: 1px solid #ddd;
    text-align: center;
  }

  .row {
    display: flex;
  }

  .row div {
    flex: 1;
  }
  </style>
</head>
<body>
  <h1>Flex Layout</h1>
  <div class="row">
    <div>1/2</div>
    <div>1/2</div>
  </div>
  <div class="row">
    <div>1/3</div>
    <div>1/3</div>
    <div>1/3</div>
  </div>
  <div class="row">
    <div>1/4</div>
    <div>1/4</div>
    <div>1/4</div>
    <div>1/4</div>
  </div>
</body>
</html>
```

---

## flex2.html

+ 子要素に固定サイズの要素を含むことができる

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style media="screen">
  div {
    border: 1px solid #ddd;
    text-align: center;
  }

  .row {
    display: flex;
  }

  .row div {
    flex: 1;
  }

  .row div.fix {
    flex: none;
    width: 200px;
  }
  </style>
</head>
<body>
  <h1>Flex Layout</h1>
  <div class="row">
    <div class="fix">200px</div>
    <div>1/2</div>
  </div>
  <div class="row">
    <div>1/3</div>
    <div class="fix">200px</div>
    <div>1/3</div>
  </div>
  <div class="row">
    <div>1/4</div>
    <div>1/4</div>
    <div>1/4</div>
    <div class="fix">200px</div>
  </div>
</body>
</html>
```

---

## flex3.html

+ `flex-direction: column;`を指定すると縦にFlexレイアウトを表現できる
+ `min-height: 100vh;`とすることで1画面分のサイズを確保しておく

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style media="screen">
  * {
    border: 1px solid #ddd;
  }

  body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  main {
    flex: 1;
  }
  </style>
</head>
<body>
  <header>Header</header>
  <main>Main</main>
  <footer>Footer</footer>
</body>
</html>
```

---

## flex4.html

+ ヘッダ、フッタ、サイドバー、メインコンテンツの領域を定義する

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style media="screen">
  * {
    margin: 0;
  }

  body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  header {
    background-color: #ddd;
    padding: 20px;
  }

  footer {
    background-color: #ddd;
    padding: 20px;
  }

  div {
    flex: 1;
    display: flex;
  }

  article {
    flex: 1;
    margin: 20px;
    padding: 20px;
  }

  nav {
    background-color: #ddd;
    width: 200px;
    margin: 20px;
    padding: 20px;
  }
  </style>
</head>
<body>
  <header>Header</header>
  <div>
    <nav>Nav</nav>
    <article>Article</article>
  </div>
  <footer>Footer</footer>
</body>
</html>
```

---

## エクササイズ

[エクササイズ](ex/05_css_ex.md)
