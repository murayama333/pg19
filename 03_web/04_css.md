# CSS - セレクタ

## selector.html

+ idセレクタ
  + id属性を探索するセレクタ
  + セレクタのプレフィックスに`#`を使う
+ classセレクタ `.`
  + class属性を探索するセレクタ
  + セレクタのプレフィックスに`.`を使う
+ tagセレクタ
  + タグを探索するセレクタ
  + セレクタにタグ名を使う

```html
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style media="screen">
    #paragraph-1 {
      color: green;
    }
    #paragraph-2 {
      color: purple;
    }
    .interpreter {
      color: red;
    }
    .compiler {
      color: blue;
    }
  </style>
</head>
<body>
  <h1>Hello Programming.</h1>
  <h2>Programming Languages.</h2>
  <p id="paragraph-1">
    There are many programming languages.
  </p>
  <p id="paragraph-2">
    These can be classified into compiler-type languages and interpreter-type languages.
   </p>
  <ul>
    <li class="interpreter">PHP</li>
    <li class="compiler">Java</li>
    <li class="interpreter">Python</li>
    <li class="compiler">C#</li>
  </ul>
</body>
</html>
```

### CSSの文法

```css
SELECTOR {
  PROPERTY_NAME: PROPERTY_VALUE;
}
```


---

## エクササイズ

[エクササイズ](ex/04_css_ex.md)
