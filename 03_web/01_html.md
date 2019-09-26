# HTML

HTML(Hyper Text Markup Language)はWebページを作成するためのプログラミング言語です。

### web1.html

+ h1タグは文章の中の見出しを定義します。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Hello World!</h1>
</body>
</html>
```

---

### web2.html

+ imgタグは画像ファイルを挿入します。
+ imgタグのsrc属性に画像ファイルのパス（URL）を指定します。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <img src="https://github.githubassets.com/images/modules/logos_page/Octocat.png">
</body>
</html>
```

---


### web3.html

+ aタグはハイパーリンクを定義します。
+ aタグのhref属性に遷移先のページ（URL）を指定します。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <a href="https://github.com/">GitHub</a>
</body>
</html>
```

---

### web4.html

+ ulタグ、liタグは箇条書き（リスト）を定義します。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>HTML</li>
    <li>CSS</li>
    <li>JavaScript</li>
  </ul>
</body>
</html>
```

---

### web5.html

+ tableタグはテーブル（表）を定義します。
+ trタグはテーブルにおける行を定義します。
+ thタグは見出しのセルを定義します。
+ tdタグは通常のセルを定義します。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>H1</th>
      <th>H2</th>
      <th>H3</th>
    </tr>
    <tr>
      <td>A1</td>
      <td>A2</td>
      <td>A3</td>
    </tr>
    <tr>
      <td>B1</td>
      <td>B2</td>
      <td>B3</td>
    </tr>
  </table>
</body>
</html>
```

---

### web6.html

+ pタグは段落を定義します。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>What to make</h1>
  <p>
    In the case of supervised learning, for example in the case of image recognition, it is useful to have a dataset that can be used for immediate learning, such as the MNIST dataset, simple classification problems, and in the case of clustering the iris dataset.
  </p>
  <p>
    In Reinforcement Learning, it's a little bigger framework than a data set, so is it better for the environment? Using OpenAI Gym, you can start reinforcement learning on subjects such as inverted pendulum (CartPole), space invaders, and block breaking.
  </p>
</body>
</html>
```

---

### web7.html

+ formタグは入力フォームを定義します。
+ inputタグは入力項目を定義します。
+ inputタグのtype属性の値によって表示が変化します。
+ textareaタグは複数行入力可能なテ入力項目（テキストエリア）を定義します。
+ selectタグ、optionタグでセレクトボックスを定義します。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="" method="get">
    Text
    <input type="text" name="myText" value="">
    <br>

    Radio1
    <input type="radio" name="myRadio" value="1">
    Radio2
    <input type="radio" name="myRadio" value="2">
    Radio3
    <input type="radio" name="myRadio" value="3">
    <br>

    CheckboxA
    <input type="checkbox" name="myCheckbox" value="a">
    CheckboxB
    <input type="checkbox" name="myCheckbox" value="b">
    <br>

    Textarea
    <textarea name="myTextarea" ></textarea>
    <br>

    Select
    <select name="mySelect">
      <option value="1">A</option>
      <option value="2">B</option>
      <option value="3">C</option>
    </select>
    <br>

    Button
    <input type="button" value="hello">
    <br>

    Submit
    <input type="submit" value="send">
    <br>
  </form>
</body>
</html>
```

---

### web8.html

+ divタグ、spanタグは特殊な効果を持たない汎用的なタグです。
+ divタグはブロック要素、spanタグはインライン要素として利用します。
+ divタグやspanタグはCSSやJavaScriptと組み合わせて利用することで効果を発揮します。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
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

## エクササイズ

[エクササイズ](ex/01_html_ex.md)
