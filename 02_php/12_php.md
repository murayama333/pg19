# アルゴリズム

### algo1.php

+ 配列の要素を小さいものから順に並び替えます。

```php
<?php
$array = [60, 74, 67, 52, 95, 73];

for($i = 0; $i < count($array); $i++){
  for($j = 0; $j < count($array) - 1 - $i; $j++){
    if ($array[$j] > $array[$j + 1]){
      $tmp = $array[$j];
      $array[$j] = $array[$j + 1];
      $array[$j + 1] = $tmp;
    }
  }
}
print_r($array);
```

### 実行

```
> php algo1.php
Array
(
    [0] => 52
    [1] => 60
    [2] => 67
    [3] => 73
    [4] => 74
    [5] => 95
)
```

---

### algo2.php

+ 実行時に受け取った引数を線形探索します。

```php
<?php
$array = [60, 74, 67, 52, 95, 73, 45, 72, 81, 90, 70];
$target = $argv[1];

$search = false;
for($i = 0; $i < count($array); $i++){
  if ($array[$i] == $target) {
    $search = true;
    break;
  }
}

if ($search) {
  echo "Found" . PHP_EOL;
} else {
  echo "Not Found" . PHP_EOL;
}
```

### 実行

```
> php algo1.php
Array
(
    [0] => 52
    [1] => 60
    [2] => 67
    [3] => 73
    [4] => 74
    [5] => 95
)
```

---

### algo3.php

+ 実行時に受け取った引数を2分探索します。

```php
<?php
$array = [60, 74, 67, 52, 95, 73, 45, 72, 81, 90, 70];
$target = $argv[1];

sort($array);
$left = 0;
$right = count($array) - 1;

$search = false;
while($left <= $right) {
  $mid = (int)(($left + $right) / 2);
  if ($array[$mid] > $target) {
    $right = $mid - 1;
  } else if ($array[$mid] < $target) {
    $left = $mid + 1;
  } else {
    $search = true;
    break;
  }
}

if ($search) {
  echo "Found" . PHP_EOL;
} else {
  echo "Not Found" . PHP_EOL;
}
```

> 2分探索を行うには予め配列を並び替えて置く必要があります。

---

### algo4.php

+ 配列の要素の絶対値の合計を求めるプログラムです。

```php
<?php
$array = [-60, 74, -67, 52, 100];

$total = 0;
for ($i = 0; $i < count($array); $i++) {
  if ($array[$i] >= 0) {
    $total = $total + $array[$i];
  } else {
    $total = $total - $array[$i];
  }
}

echo $total . PHP_EOL;
```

---

### 演習

+ [エクササイズ - アルゴリズム](ex/12_php_ex.md)
