# エクササイズ - 関数 - 配列関数

## ar_ex1.php

次の配列データがあります。

```php
<?php
$cards = ["J", "Q", "K", "A"];
???
print_r($cards);
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php ar_ex1.php
Array
(
    [0] => J
    [1] => Q
    [2] => K
)
```

> 先頭から3つの要素を取得します。

---

## ar_ex2.php

次の配列データがあります。

```php
<?php
$cards = ["J", "Q", "K", "A"];
???
print_r($cards);
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php ar_ex2.php
Array
(
    [0] => A
    [1] => J
    [2] => K
    [3] => Q
)
```

> 要素をアルファベット順に並び替えます。


---


## ar_ex3.php

次の配列データがあります。

```php
<?php
$cards = ["J", "Q", "K", "A"];
???
print_r($cards);
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php ar_ex3.php
Array
(
    [0] => A
    [1] => K
    [2] => Q
    [3] => J
)
```

> 配列の要素を逆順に並べ替えます。

---


## ar_ex4.php

次の配列データがあります。

```php
<?php
$cards = ["J", "Q", "K", "A"];
???
print_r($cards);
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php ar_ex4.php
Array
(
    [0] => Q
    [1] => K
    [2] => J
    [3] => A
)
```

> 配列の要素をシャッフルします。上記のとおりに出力されなくても良いものとします。


---

## ar_ex5.php

次の配列データがあります。

```php
<?php
$cards = ["J", "J", "A", "A"];
???
print_r($cards);
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php ar_ex5.php
Array
(
    [0] => J
    [2] => A
)
```

> 配列の中から重複する要素を削除します。

---


## ar_ex6.php

次の配列データがあります。

```php
<?php
$cards1 = ["J", "Q"];
$cards2 = ["K", "A"];
???
print_r($cards);
```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php ar_ex6.php
Array
(
    [0] => J
    [1] => Q
    [2] => K
    [3] => A
)
```

> 2つ配列の要素を結合します。


---


## ar_ex7.php

次の配列データがあります。

```php
<?php
$cards1 = ["J", "Q", "K", "A"];
$cards2 = ["Q", "K", "A"];
???
print_r($cards);

```

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

```
> php ar_ex7.php
Array
(
    [0] => J
)
```

> 2つの配列の要素の差分を出力します。

---
