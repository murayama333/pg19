# エクササイズ - Linuxコマンド

## 1 ディレクトリ・ファイルの作成

次の構成に従ってディレクトリ、ファイルを作成してください。

```
murayama
├── america
├── china
└── japan
    ├── kyoto
    ├── osaka
    │   ├── higashiosakashi.txt
    │   ├── osakashi.txt
    │   └── sakaishi.txt
    └── tokyo
```

以下のコマンドを実行してから作業を開始してください。

```
mkdir murayama
cd murayama
```

### ヒント

+ `japan, america, china` 3つのディレクトリを作成します。

```
??? japan
??? america
??? china
```

+ `japan` ディレクトリに移動します。

```
??? japan
```

+ `tokyo, osaka, kyoto` 3つのディレクトリを作成します。
+ `osaka` ディレクトリに移動します。
+ `osakashi.txt, sakaishi.txt, higashiosakashi.txt` 3つのファイルを作成します。
  + ファイルの中身は空とします。

---

## 2 ファイルの編集

以下のとおりファイルを編集してください。

+ `osakashi.txt`をVIエディタで開いて`2700000`と入力します。
+ `sakaishi.txt`をVIエディタで開いて`840000`と入力します。
+ `higashiosakashi.txt`をVIエディタで開いて`500000`と入力します。

### ヒント

VIエディタの操作方法について確認しておきましょう。

+ VIエディタは`vi`コマンドで起動します。
+ VIエディタにはNORMALモード、INSERTモードがあります。
  + `NORMAL`モードから`INSERT`モードに変更するには`i`をタイプします。
  + `INSERT`モードから`NORMAL`モードに変更するには`Esc`をタイプします。
+ ファイルの編集を終える場合は`Esc`をタイプして`NORMAL`モードに戻り、以下のキーをタイプします。
  + `:w`
    + ファイルの保存
  + `:q`
    + ファイルの編集の終了
  + `:wq`
    + ファイルを保存して編集を終了
  + `:q!`
    + ファイルを保存せずに終了


<!--

```
mkdir murayama
cd murayama
mkdir japan
mkdir america
mkdir china
cd japan
mkdir tokyo
mkdir osaka
mkdir kyoto
cd osaka
touch osakashi.txt
cp osakashi.txt sakaishi.txt
cp osakashi.txt higashiosakashi.txt
```

2700000
840000
500000

-->