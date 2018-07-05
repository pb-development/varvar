# varvar

変数名、関数名などのネーミングを考える時間を軽減し、エンジニアが本来考えるべき、ロジックや問題に使う時間を少しでも多く使えるようにする為のツールです

## Description
コマンドラインに、varvar用のコマンドと単語を打ち込むと、適切な単語・フレーズを提示してどれを使えばいいのかが表示されます

あとは、その単語・フレーズをあなたのソースにコピペするだけです

### Demo
![varvar mov](https://user-images.githubusercontent.com/15168738/42141197-7469e9f2-7de2-11e8-9800-daf2e4050cab.gif)

## Usage
### Install
```
composer require pb-development/varvar
```

### Settings
varvar.jsonを生成する

```
vv open
```

### Dependences
- PHPの入っている環境

- 翻訳は日本語・英語のみ


## Hints
### Command Reference
#### 検索
使いたい単語を入力して、変数名を返却する
varvar.jsonに変数の形式（キャメルケース、スネークケース）を指定できるので、それに從う

```
vv order -subcommand 'word'
```

#### 構文チェック
varvar.jsonに設定されているコーディングルールに則っているかなど静的解析かけられる
```
vv care
```

#### Examples Of Command

- 単語の用途
```
    -i クラス(insteance)
    -f 関数(function)
    -t 一時利用(temporary)
    -c 変数(change)
```

- 単語の種類
```
    -n 名詞(noun)
    -v 動詞(verb)
    -s 文章（sentence:◯◯を****する）
```

- 説明いるかどうか（オプション）
```
    -w 説明付き
```

#### 使用例
コマンドの組み合わせによって、単語の用途（クラス・関数用 etc）や種類(名詞・動詞・文章)を指定できる

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

#### エラー

- varvar.jsonがない状態で検索した時
```
vv order -cn 単語
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
vv order -cv 富士山
# vv: cannot find proper words for '富士山'
```


#### 検索
- CLIにコマンドと検索したい単語を入力する
 
 例「結果」という単語を、変数として使いたい

※ 変数(c)、名詞(n)、説明付き(w)なのでコマンドは以下のようになる
→詳細はコマンドリファレンスを参照


```
vv order -cnw 結果

# NOUN result output end ret outcome
result:結果、汎用的に使えるのでとりあえず結果といえばこれを使えば良い
output:この値がどこかにアウトプットされる時、何かのアウトプットになっている時に使うと良い
end:最終結果、単体では意味がはっきりしないので、他の単語と組み合わせて使うと良い
ret:returnの略、最終的に呼び出し元に返却される時に使うと良い
outcome:結果、あまり使わないけど他の選択肢がない時に使うと良い
```

単語の説明を省くこともできる
```
vv order -cn 結果
# NOUN result output outcome end ret
```

## Future Releases
- コマンドを入力したら、翻訳・用途を返却する（基本機能）

- varvar.jsonにコーディグ規約を書けるので、静的コード解析が行える

- どの単語がよく検索されているのかなどログを取得して分析する


## Contribution
1. Fork it  
2. Create your feature branch  
3. Commit your changes  
4. Push to the branch  
5. Create new Pull Request

## License
MIT

## Tech 

- Facebook Translate
