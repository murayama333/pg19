# エクササイズ - 配列 - 連想配列

## a_array_ex1.php

次の連想配列があります。

```php
<?php
$fruits = ["Apple" => 100, "Banana" => 200, "Cherry" => 300];
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php a_array_ex1.php
100
200
300
```

---

## a_array_ex2.php

次の配列があります。

```php
<?php
$fruits = ["Apple" => 100, "Banana" => 200, "Cherry" => 300];
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php a_array_ex2.php
3
```

> 配列の要素を取得して表示します。

---


## a_array_ex3.php

次の配列があります。

```php
<?php
$fruits = ["Apple" => 100, "Banana" => 200, "Cherry" => 300];
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php a_array_ex3.php
600
```

> 配列の要素の合計値を出力します。

---


## a_array_ex4.php

次の配列があります。

```php
<?php
$fruits = ["Apple" => 100, "Banana" => 200, "Cherry" => 300];
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php a_array_ex4.php
200
```

> 配列の要素の平均値を出力します。

---


## a_array_ex5.php

次の配列があります。

```php
<?php
$fruits = [
  "Apple" => ["price" => 100, "color" => "red"],
  "Banana" => ["price" => 200, "color" => "yellow"],
  "Cherry" => ["price" => 300, "color" => "red"],
];
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php a_array_ex5.php
Apple : 100
Cherry : 300
```

> colorが"red"のものだけ出力します。

### ヒント

```php
$fruits = [
  "Apple" => ["price" => 100, "color" => "red"],
  "Banana" => ["price" => 200, "color" => "yellow"],
  "Cherry" => ["price" => 300, "color" => "red"],
];

foreach ($fruits as $key => $value) {
  if (???) {
    echo $key . " : " . $value["price"] . PHP_EOL;
  }
}
```

---


## a_array_ex6.php

次の配列があります。

```php
<?php
$fruits = [
  "Apple" => ["price" => 100, "color" => "red"],
  "Banana" => ["price" => 200, "color" => "yellow"],
  "Cherry" => ["price" => 300, "color" => "red"],
  "Lemon" => ["price" => 100, "color" => "yellow"],
];
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php a_array_ex6.php
400
300
```

> "red"の合計値400と"yellow"の合計値300を出力します。

---