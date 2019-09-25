# 課題： Note App v1

## 概要

コマンドラインで利用する簡易なノートアプリケーションを開発します。このプログラムは起動すると、コマンドラインから以下の入力を受け付けます。

![](img/note.gif)

実行中のアプリケーションは以下のサブコマンドを受け付けます。

+ list
  + ノート一覧を表示する
+ create CONTENT
  + ノートを登録する
+ delete ID
  + 指定したIDのノートを削除する
+ update ID CONTENT
  + 指定したIDのノートを更新する
+ quit
  + アプリケーションを終了します。

> IDやCONTENTは入力時のパラメータです。

## ファイル

以下のファイルを作成します。

+ note.php
+ note.csv

### note.php

```php
<?php
define("NOTE_FILE", "note.csv");
define("INPUT_MESSAGE", "Input command > ");
define("COMMAND_ERROR_MESSAGE", "Command Error!" . PHP_EOL);
define("FILE_ERROR_MESSAGE", "File Error!" . PHP_EOL);
define("END_MESSAGE", "Bye!" . PHP_EOL);

function input()
{
  return explode(" ", trim(fgets(STDIN)));
}

function get_notes()
{
  // TODO
}

function create_note($content)
{
  // TODO
}

function delete_note($id)
{
  // TODO
}

function update_note($id, $content)
{
  // TODO
}

function get_new_note_id($notes)
{
  // TODO
}

function save_notes($notes)
{
  // TODO
}

while (true) {
  echo INPUT_MESSAGE;
  $commands = input();
  if (count($commands) == 0) {
    echo COMMAND_ERROR_MESSAGE;
    continue;
  }

  if ($commands[0] === "list") {
    if (count($commands) !== 1) {
      echo COMMAND_ERROR_MESSAGE;
      continue;
    }
    $notes = get_notes();

    // TODO

  } else if ($commands[0] === "quit") {
      if (count($commands) !== 1) {
        echo COMMAND_ERROR_MESSAGE;
        continue;
      }
      echo END_MESSAGE;
      break;
  }
}
```


### note.csv

```
1,Apple
2,Cherry
3,Orange
```

> ここでは1件のレコードをノートと呼ぶことにします。また先頭列を`ID`、2列目を`CONTENT`と呼ぶことにします。

+ 上記のCSVファイルに新規ノートが追加された場合、新たに`ID`を割り振る必要があります。たとえば新規ノートの`CONTENT`に`Lemon`を入力すると次のようになります。

```
1,Apple
2,Cherry
3,Orange
4,Lemon
```

+ ノートが削除された場合、`ID`は空き番となります。たとえば`ID`が`3`のノートを削除すると次のようになります。

```
1,Apple
2,Cherry
4,Lemon
```

+ 上記の状態で新たにノートが登録されると`ID`には最大値+1を指定します。たとえば新たに`Orange`を追加すると次のようになります。

```
1,Apple
2,Cherry
4,Lemon
5,Orange
```


## 課題一覧

ここでは以下の4つの課題に取り組みます。

1. ノート一覧表示機能
1. ノート登録機能
1. ノート削除機能
1. ノート更新機能

---

## 課題1. ノート一覧表示機能


### note.php

+ `while`ループの中の`list`コマンドの処理ブロックにおいて以下のとおり実装します。
  + `$commands`変数の要素数が`1`かどうか確認します。
    + 要素数が`1`でない場合、画面にコマンドエラーメッセージを出力します。
    + 以降の処理は実行せずに`while`文の次のループに進みます。
  + `get_notes`関数を呼び出して、戻り値を`$notes`変数に代入します。
  + `$notes`変数を`for`文を使って実行結果のとおり出力します。

+ `get_notes`関数を以下のとおり実装します。
  + `get_notes`関数はCSVファイルを読み込んで、配列データ返却します。

```php
function get_notes()
{
  $fp = ???(NOTE_FILE, "r");
  if ($fp === false) {
    die(FILE_ERROR_MESSAGE);
  }
  $notes = [];
  $note = fgetcsv($fp);
  while($note !== false) {
    $notes[] = $note;
    $note = fgetcsv($fp);
  }
  // print_r($notes)
  ???($fp);
  return ???;
}
```

> `print_r`のコメントを解除して結果を出力してみましょう。


---

## 課題2. ノート登録機能

+ `while`ループの中の`create`コマンドの処理ブロックにおいて以下のとおり実装します。
  + `$commands`変数の要素数が`1`かどうか確認します。
    + 要素数が`1`でない場合、画面にコマンドエラーメッセージを出力します。
    + 以降の処理は実行せずに`while`文の次のループに進みます。
  + `create_note`関数の引数に`$commands[1]`を指定して呼び出します。

+ `create_note`関数を以下のとおり実装します。
  + `create_note`関数は引数で受け取ったCONTENTに、新たなIDを付与してファイルに保存します。

```php
function create_note($content)
{
  $notes = get_notes();
  $id = get_new_note_id($notes);
  $notes[] = [$id, $content];
  save_notes($notes);
}
```

+ `get_new_note_id`関数を以下のとおり実装します。
  + `get_new_note_id`関数は戻り値としてIDの最大値+1を返却します。

```php
function get_new_note_id($notes)
{
  $max_id = 0;

  // TODO

  return $max_id + 1;
}
```

+ `save_notes`関数を以下のとおり実装します。
  + `save_notes`関数は引数で受け取ったノートの一覧をファイルにCSV形式で保存します。

```php
function save_notes($notes)
{
  $fp = @fopen(NOTE_FILE, "w");
  if ($fp === false) {
    die(FILE_ERROR_MESSAGE);
  }

  // TODO

}
```

## 課題3. ノート削除機能

+ `while`ループの中の`delete`コマンドの処理ブロックにおいて以下のとおり実装します。
  + `$commands`変数の要素数が`2`かどうか確認します。
    + 要素数が`2`でない場合、画面にコマンドエラーメッセージを出力します。
    + 以降の処理は実行せずに`while`文の次のループに進みます。
  + `delete_note`関数の引数に`$commands[1]`を指定して呼び出します。

+ `delete_note`関数を以下のとおり実装します。
  + `delete_note`関数は引数で受け取ったIDに該当するレコードを削除します。

```php
function delete_note($id)
{
  $notes = get_notes();

  // TODO

  save_notes($save_notes);
}
```


## 課題4. ノート更新機能

+ `while`ループの中の`update`コマンドの処理ブロックにおいて以下のとおり実装します。
  + `$commands`変数の要素数が`3`かどうか確認します。
    + 要素数が`3`でない場合、画面にコマンドエラーメッセージを出力します。
    + 以降の処理は実行せずに`while`文の次のループに進みます。
  + `update_note`関数の引数に`$commands[1]`、`$commands[2]`を指定して呼び出します。

+ `update_note`関数を以下のとおり実装します。
  + `update_note`関数は引数で受け取ったIDに該当するレコードを更新します。

```php
function update_note($id, $content)
{
  // TODO
}
```

## 課題5. 追加機能

+ ノート登録機能に登録日時（更新日時）を追加します。
+ ノート一覧表示機能を逆順表示できるように修正します。
+ ノート登録機能（更新機能）に単語ではなく、文章を追加できるように修正します。
+ 各サブコマンドを`l`、`c`、`d`、`u`、`q`のように略語で処理できるように修正します。
