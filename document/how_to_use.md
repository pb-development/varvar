使い方詳細
====


CIインターフェース
====

### コマンドリファレンス
https://github.com/planb-hakone/var2/blob/master/CI_interface.md



## 使い方

### 始める

- インストール
composer install

- 初期化

varvar.jsonを生成する

以降はこれが読み込まれるので、最初に必ずやる

対話式でコーディングルール設定したりできるけど、今回はやらない

```
vv open
```




### 検索する

- 日本語を入力して、変数名とか返してくれる

```
vv order -subcommand 'word'
```


- 以下サブコマンドをつける

1.単語の用途

    -i クラス(insteance)
    -f 関数(function)
    -t 一時利用(temporary)
    -c 変数(change)

2.単語の種類

    -n 名詞(noun)
    -v 動詞(verb)
    -s 文章（sentence:◯◯を****する）

3.説明いるかどうか（オプション）

    -w 説明付き
	http://yonotown.hatenablog.com/entry/2015/10/03/181158
	こんな感じでどういう時に使われるかを分かるようにしたい
	こんなの自動で取得できるものがあるのかわからんけど。。

- 表示された単語を使う

あとは、このコマンドをコードに貼り付けて開発する

1回コマンドすると、次のコマンド入れられるようになる


### 構文解析する

varvar.jsonに設定されているコーディングルールに則っているかなど静的解析かけられる(今回はやらない)

```
vv care
```



## 利用例
### 検索する
- varvar.jsonに書いている設定

    →キャメルなので、キャメルの変数を作る

```
{
  "project": "var2-project",
  "log": 1,
  "rule": {
    "case": "camel",
    "space": 2      
  }
}
```


- 変数・名詞　「結果」
```
vv order -cn 結果
# NOUN result output outcome end ret
```

```
vv order -cnw 結果
# NOUN result output end ret outcome
result:結果、汎用的に使えるのでとりあえず結果といえばこれ
output:この値がどこかにアウトプットされる時、何かのアウトプットになっている時に使うと良い
end:最終結果、単体では意味がはっきりしないので、他の単語と組み合わせて使うと良い
ret:returnの略、最終的に呼び出し元に返却される時に使うと良い
outcome:結果、あまり使わないけど他の選択肢がない時に使うと良い
```


- 関数・文章　「情報を集める」
```
vv order -fs 情報を集める
# FUNCTION gatherInformation collectInformation getInformation
```


```
vv order -fsw 情報を集める
# FUNCTION gatherInformation collectInformation getInformation
gather:散らばった複数のものをがさっと集める感じ、とりあえず集める時に使うと良い
collect:複数のものを整理しながら集める感じ、集める対象が決まっていて綺麗に集める時に使うと良い
information:情報、広く使えるので◯◯の情報と名前がつけられない時にとりあえず使うと良い
```

### エラーの時など

- varvar.jsonがない状態で検索した時
```
vv order -cn あいざわ
# varvar.json is not found.
```

- 間違ったコマンド使った時
```
vb
# command not found: vb
```

- 引数間違った時
```
vv order -p
# vv: 'p' is not a varvar command. See 'vv --help'.
```

- 単語が見つからない時
```
vv order -cv あいざわ
# vv: cannot find proper words for 'あいざわ'
```
