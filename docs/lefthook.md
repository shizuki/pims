# Lefthook(2024.01.04時点で理解している内容)

## Lefthookとは

Go言語で書かれた単独バイナリの多機能Githook(s)マネージャー
yaml形式で宣言的に『いつ』『どこで』『何を』やるかを記述することで、だれが見ても『解り易い』Githookの管理が可能になりました

## 設定

- プロジェクトのルートディレクトリに『lefthook.yml』または『.lefthook.yml』を置き、これを編集することで行います
- yaml形式なのでコメントを書くことも出来、非常に見通しの良い設定ファイルが出来上がります
- .lefthook.ymlの構成は以下

```yaml
hook名: # pre-commit、pre-push等。.git/hooks参照
  parallel: # オプション。『true』にすると『commands』と『scripts』が並列で実行される。
  実行するもの: # 必須。commands、scripts等。
    コマンド名: # 必須。commandsの場合は実行コマンドのラベルとして認識される（？）。scriptsの場合はここに実行ファイル名を記述する。
    フィルタ: # オプション。files、glob等。フィルタで実行されるコマンド（またはワンライナー）の結果が空の時は実行されない。
    run: # commandsの場合は必須。『yarn eslint』のように、実際に実行されるコマンドを記述する。
    runner: # scriptsの場合は必須。『コマンド名』に書かれたスクリプトを何を使って実行するかを記述する。
```

この他にも多くの[設定できる項目が用意されています](https://github.com/evilmartians/lefthook/blob/master/docs/configuration.md)

※ 各フックで実行されるスクリプトファイルは`.lefthook.yml`と同じディレクトリに`.lefthook/フック名`ディレクトリを作り、その中に置く（例：`.lefthook/pre-commit/execute-tbls.sh`）
※ `pre-commit`フックで処理したファイルは`git add`しないとコミットに反映されません（`{staged_files}`テンプレートを使用するとステージされたファイルのみを対象にすることが出来る）
