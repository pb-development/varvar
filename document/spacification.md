varvar 仕様詳細
====


- varvar.json

```
{
  "project": "var2-project",
  "log": 1,
  "rule": {
    "case": "snake",
    "space": 2      
  }
}
```

    varvar.jsonは上記のフォーマット、追加するルールがあれば追加する、今回使用するのはcaseのみ

- 日本語から英語への変換



    1. 日本語もらう
    2. 形態素解析 (めかぶ)  --> apiほしいな
    3. 名刺と動詞をぬきだす
    4. 英語に変換

        以下のURLにアクセスする
        https://glosbe.com/gapi/translate?from=jpn&dest=en&format=json&phrase=[単語]&pretty=true

    5. ええ感じにつなげる

- 類義語への変換

    たとえば【リストを取得】の場合は get_list になるかと思うが、list の部分の類語を出したい

    https://ejje.weblio.jp/english-thesaurus/content/list


![](https://www.evernote.com/l/AAtuCDM1iaxNsq9t08QqPpZoJCd2VNY0tKYB/image.png)