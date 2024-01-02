#!/usr/bin/bash

# `tbls`がインストール済みか確認する
INSTALLED=`dnf list --installed|grep tbls`
if [ -z ${INSTALLED} ]; then
    # インストールするバージョンの指定（githubのAPIを利用して最新のバージョン番号を取得）
    TBLS_VERSION=`curl -s https://api.github.com/repos/k1LoW/tbls/releases/latest | jq -r .tag_name`
    # `tag_name`には先頭に`v`が付くので削除
    TBLS_VERSION="${TBLS_VERSION#v}"
    # URLを指定してdnfでインストール
    # インストール方法変更ないかチェック
    # sudo出来ないイレギュラーはとりあえず考えない
    sudo dnf install https://github.com/k1LoW/tbls/releases/download/v${TBLS_VERSION}/tbls_${TBLS_VERSION}-1_amd64.rpm
fi
# リポジトリのルートディレクトリを取得
REPOSITORY_ROOT_DIRECTORY=`git rev-parse --show-toplevel`
# リポジトリのルートディレクトリに移動
cd ${REPOSITORY_ROOT_DIRECTORY}
# `direnv`がインストールされていて、`.envrc`がディレクトリ内に存在した時
# `--env=testing`が効かなくなるので一旦名前を変えておく
if [ -f ${REPOSITORY_ROOT_DIRECTORY}/.envrc ]; then
    mv ${REPOSITORY_ROOT_DIRECTORY}/.envrc ${REPOSITORY_ROOT_DIRECTORY}/testing.envrc
fi
# テスト用データベースを初期化（データは入れない）してテーブル定義書を再生成
php artisan migrate:fresh --env=testing
tbls doc --rm-dist
# 名前を変更した`.envrc`があれば名前を元に戻す
if [ -f ${REPOSITORY_ROOT_DIRECTORY}/testing.envrc ]; then
    mv ${REPOSITORY_ROOT_DIRECTORY}/testing.envrc ${REPOSITORY_ROOT_DIRECTORY}/.envrc
fi
# .env再読み込み
direnv allow
# 再生成したテーブル定義書をステージングする
git add docs/schema/.
# 元いたディレクトリに戻る
cd -
