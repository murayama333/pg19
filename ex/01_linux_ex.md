# エクササイズ

## hello.html

次のプログラムを作成してください。

```html
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Hello HTML</title>
  </head>
  <body>
    <h1>Hello HTML</h1>
    <ul>
      <li><a href="https://google.com">Google</a></li>
      <li><a href="https://amazon.com">Amazon</a></li>
      <li><a href="https://facebook.com">Facebook</a></li>
      <li><a href="https://apple.com">Apple</a></li>
    </ul>
    <button onclick="hello()">Hello</button>
  </body>
</html>
```

---

## hello.css

次のプログラムを作成してください。

```css
body {
  background-color: #cdcdcd;
}

h1 {
  font-size: 64px;
  padding: 20px;
}
```

hello.htmlのheadタグに以下のコードを追記します。

```html
<link rel="stylesheet" href="hello.css">
```

---

## hello.js

次のプログラムを作成してください。

```js
function hello() {
  for (let i = 0; i < 5; i++) {
    alert("Hello " + i);
  }
}
```

hello.htmlのheadタグに以下のコードを追記します。

```js
<script src="hello.js" charset="utf-8"></script>
```
