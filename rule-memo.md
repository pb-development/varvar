コーディングルール
====

基本設定
----

- 文字コード: utf-8 or shift-jis
- ネーミングを短くする: true / false


ルール設定
----

- case

  - camel
  - upar_camel
  - snake

- var_case

  - camel
  - upar_camel
  - snake

- var_propaty

  - camel
  - upar_camel
  - snake

- class_case

  - camel
  - upar_camel
  - snake

- func_case

  - camel
  - upar_camel
  - snake

予約語（変換対応表）
----

この言葉はこれ変換してほしい対応を書く

- regist => registor
- edit => modify
- delete => remove
- etc

規約設定
----

- indent

    - 2 or 4 or 8

- if-else-ifelse

    - ifの後ろにスペースを記述する。
    - elseif, elseの前後にスペースを記述する。
    - 開きカッコ { , 閉じカッコ } は、if, elseif, elseと同じ行に記述する。
    - 最後のとじカッコは本文の最後の次の行に記述する。

swith-case

    - switch, caseの後ろにスペースを1つあける。
    - case文はswitch文からインデントする。
    - breakはcase文の中の本文と同じインデントで記述する。
    - 意図的にbreakを記述せずに処理をスルーさせる場合は、「//no break」のようにコメントを記述する。
    - 最後の閉じカッコは本文の最後の次の行に記述する。

foreach

    - for, foreachの後ろに1つスペースを記述。
    - (forの場合)セミコロンの後ろは1つスペースを記述。
    - 開きカッコ { はforと同じ行に記述。
    - 最後の閉じカッコは本文の最後の次の行に記述。

while

    - whileの後ろにスペースを1つ記述。
    - 開きカッコはwhi leと同じ行に記述。
    - doの後ろにスペースを1つ記述。
    - do-whileの場合、whileの前後にスペースを1つ記述。
    - 最後のとじカッコは本文の次の行に記述。

try-catch

    - tryの後ろに1つスペースを記述。
    - catchの前後に1つスペースを記述。
    - try,catchと同じ行に開きカッコ、閉じカッコは記述。
    - 最後の閉じカッコは本文の最後の行に記述。

Closure

    - functionの後ろにスペースを1つ記述する。
    - useの前後にスペースを1つ記述する。
    - 開きカッコはfunctionと同じ行に記述する。
    - 最後の閉じカッコは本文の最後の次の行に記述する。
    - 引数の開きカッコの後ろにスペースを記述してはいけない。
    - 引数の閉じカッコの前にスペースを記述してはいけない。
    - 引数の前にスペースは記述してはいけない。
    - 引数の各カンマの後はスペースを記述する。
    - デフォルトの値を持つ引数は最後に記述する。
    - 引数は、インデントにより揃えて複数行に記述してもよい。その場合は、最初の記述も次の行からはじめて1行に1つの引数を記述する。 引数を複数行に記述する場合、開きカッコ「{」は引数の閉じカッコ「)」と同じ行に記述する。
    - クロージャが引数に直接記述された場合も同様のルールとなる。

ps-r
