# エクササイズ - 制御構文 - 分岐構造 - if文

## if_ex1.php

+ 認証プログラムを作成します。
  + ユーザIDによって出力を決定します。
    + ユーザIDが"Alice"の場合、"Success"と表示します。
    + ユーザIDが"Alice"でない場合、"Error"と表示します。

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

#### ユーザIDが"Alice"の場合

```
> php if_ex1.php
USER ID:Alice
Success
```

#### ユーザIDが"Alice"でない場合

```
> php if_ex1.php
USER ID:John
Error
```

### ヒント

```php
<?php
$id = "Alice";

echo "USER ID:$id" . PHP_EOL;
// TODO
```

---

## if_ex2.php

+ 認証プログラムを作成します。
  + ユーザIDによって出力を決定します。
    + ユーザIDが"Alice"、"Bob"のいずれかの場合、"Success"と表示します。
    + 上記以外の場合は、"Error"と表示します。

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

#### ユーザIDが"Alice"の場合

```
> php if_ex2.php
USER ID:Alice
Success
```

> ユーザIDが"Bob"の場合も同様です。

#### ユーザIDが"Alice"、"Bob"でない場合

```
> php if_ex1.php
USER ID:John
Error
```


### ヒント

```php
<?php
$id = "Alice";

echo "USER ID:$id" . PHP_EOL;
// TODO
```

---


## if_ex3.php

+ 認証プログラムを作成します。
  + ユーザIDによって出力を決定します。
    + ユーザIDが"Alice"、かつ、パスワードが"pass"の場合、"Success"と表示します。
    + 上記以外の場合は、"Error"と表示します。

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

#### ユーザIDが"Alice"、パスワードが"pass"の場合

```
> php if_ex1.php
USER ID:Alice
PASSWORD:pass
Success
```

#### ユーザIDが"Alice"、パスワードが"test"の場合

```
> php if_ex1.php
USER ID:Alice
PASSWORD:test
Error
```


### ヒント

```php
<?php
$id = "Alice";
$password = "pass";

// TODO
```

---


## if_ex4.php

+ 買い物の金額とポイントを表示するプログラムを作成します。
  + ポイントは500円以上購入した場合に1ポイント付与するものとします。

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

#### 購入金額が500円の場合

```
> php if_ex4.php
PRICE:500
POINT:1
```

#### 購入金額が300円の場合

```
> php if_ex4.php
PRICE:300
```

### ヒント

```php
<?php
$price = 500;

echo "PRICE:$price" . PHP_EOL;
if (???) {
  echo "POINT:1" . PHP_EOL;
}
```

---

## if_ex5.php

+ 買い物の金額とポイントを表示するプログラムを作成します。
  + ポイントは500円毎に1ポイント付与するものとします。

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

#### 購入金額が2000円の場合

```
> php if_ex5.php
PRICE:2000
POINT:4
```

#### 購入金額が300円の場合

```
> php if_ex5.php
PRICE:300
```


### ヒント

```php
<?php
$price = 2000;

// TODO
```

---


## if_ex6.php

+ 買い物の金額とポイントを表示するプログラムを作成します。
  + ポイントはGOLD会員と通常会員の2種類によって決定します。
    + GOLD会員の場合、ポイントは500円毎に1ポイント付与するものとします。
    + 通常会員の場合、ポイントは1000円毎に1ポイント付与するものとします。

次の実行結果となるようにPHPプログラムを作成してください。

### 実行結果

#### GOLD会員が3000円購入した場合

```
> php if_ex6.php
PRICE:3000
MEMBER:GOLD
POINT:6
```

#### 通常会員が3000円購入した場合

```
> php if_ex6.php
PRICE:3000
MEMBER:NORMAL
POINT:3
```

#### GOLD会員が500円購入した場合

```
> php if_ex6.php
PRICE:500
MEMBER:GOLD
POINT:1
```

#### 通常会員が500円購入した場合

```
> php if_ex6.php
PRICE:500
MEMBER:NORMAL
```

### ヒント

```php
<?php
$price = 3000;
$gold = true;

// TODO
```

---
