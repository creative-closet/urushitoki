# うるしとき開発リポジトリ

# 【使い方】

## --ディレクトリ構造--

```
urushitoki        //WordPress 本体のディレクトリと同一（ Local の場合 public と同一）
├─ wp-content
|  ├─ plugins
|  └─ themes
|     └─ urushitoki
|        ├─ node_modules
|        ├─ production     //作業ディレクトリ
|        |  ├─js
|        |  ├─php
|        |  └─sass
|        ├─ src            //styleguide 用ディレクトリ
|        |  ├─ js
|        |  ├─ sass
|        |  └─ styleguide
|        ├─ gulpfile.js    //gulp設定ファイル
|        ├─ package.json
|        └─ package-lock.json
└─ README.md
```
## 1. Local by FlywheelでWordPress開発環境を構築  

Site Domain を ``` urushitoki.local ``` で作成すると gulp の起動時オプションが不要

## 2. 作業ディレクトリ
    Local で作成したプロジェクトディレクトリ
    └─ app //ここでgit clone
### コマンド

  ``` git@github.com:creative-closet/urushitoki.git ```

## 3. clone された urushitoki の中身を public の方へ移動

    urushitoki
    ├─ wp-content
    |  └─ themes
    |     └─ urushitoki    // → publick/wp-content/themes/ に移動
    ├─ .editorconfig // → public 直下に移動
    ├─ .git          // → public 直下に移動
    ├─ .gitignore    // → public 直下に移動
    └─ readme.md     // → public 直下に移動

移動後 clone してきた urushitoki フォルダは空になるので削除

## 4. テーマの urushitoki ディレクトリに移動し Node のプラグインパッケージインストール

デフォルトで Local を登録している場合の移動コマンド

``` cd ~/Local\ Sites/urushitoki/app/public/wp-content/themes/urushitoki ```

パッケージインストール

``` npm install ```

## 5. gulpを起動

Local の Site Domain が urushitoki.local の場合

```npx gulp ```

Site Domain が別の場合

``` npx gulp --domain "サイトのドメイン" ```  

※サイトのドメイン名は Local の "Site Domain" を入力

## 6. コーディング
PHP、Sass、Jsファイルの編集は```production```の中で行って下さい。

【基本的な動作】
・Dart Sass コンパイル=>ベンダープレフィックス自動付与、メディアクエリの整理
・起動時ローカルサーバーの立ち上げ
・production/sass・php・js ファイルの変更を監視。変更があった場合はブラウザを自動でリロード。
※sass の変更に関してはリロードは行われず、変更部分だけ反映されます。

# コンポーネント作成の手順

 1. pull してきたデータに割り当てのタスクを更新する
 2. 一旦、production>php>index.php にコードを記述
 3. production>sass>object の中に scss ファイルを定義する
 4. ローカルで問題なければ、 index.php の記述内容を削除
 5. コミットメッセージに issue 番号を含めて commit 後、 push する
 6. 別の人に review してもらう


# スタイルガイド（ Fractal ）について

## 使い方

テーマ開発用の urushitoki ディレクトリ内にて編集及びコマンド実行

## スタイルガイドの追加

例）sample というコンポーネントを作成した場合

    ├─ urushitoki
    ├─ wp-content
    |  └─ themes
    |     └─ urushitoki
    |        └─ src
    |           ├─ js         //コンポーネントで作成した JS のコードを記述・保存
    |           ├─ sass       //コンポーネントで作成した Sass のコードを記述・保存
    |           └─ styleguide
    |              ├─ components
    |              |  └─ sample
    |              |     ├─ sample.hbs //html の記述。コンポーネントディレクトリ名とファイル名を一致させる
    |              |     └─ readme.md  //コンポーネントの説明を記述
    |              └─ docs

1. 作成したコンポーネント名のディレクトリを作成（sample)
2. sample ディレクトリ内に sample.hbs と readme.md 作成
3. 作成した sass ファイルを sass ディレクトリにコピー
4. 作成した js ファイルを js ディレクトリにコピー
5. src>scss>style.css ファイルの中に @use 〜 として追記する
6. コマンドを実行し、styleguide の作成

``` npx gulp styleguide ```

## ブランチについて

必ず ` issue ` の番号をブランチ名に含めてください。この時 #も必要なので

` git branch "#1" ` という具合に、クォーテーションをつけましょう

## Git ワークフロー

1. 担当する issue に Assign
2. main ブランチから issue ブランチを作成（ main ブランチ移行時に pull すること ）
3. issue ブランチから main に対してプルリクエスト作成（ Reviewers に誰かを入れてレビューを受ける ）
4. 取り込みが完了し、issue の開発が終わったら GitHub と ローカルからブランチを削除

基本的に誰かにソースレビューを受けてマージしましょう。どうしても人が居ない場合や取り急ぎの場合は仕方なし。
その場合必ず main ブランチに支障が出ていないかチェックを忘れずに

## Git フロー

### 流れ

① 自分の作業ブランチで作業 →② プルリクを出す →③develop ブランチにマージ →④main ブランチにマージ

1. 自分の作業ブランチで作業
   → 上記の"Git ワークフロー"記載の通り作業
2. github でプルリクを出してレビューをお願いする(フィードバックがあれば修正)
   → メンバーはここまででタスク完了
3. develop ブランチにマージ
   → りえるんか YAT 実施
4. main ブランチにマージ
   → りえるんか YAT 実施（タイミングは後日判断）

### デプロイ先

develop ブランチ->開発(テスト)環境にデプロイ
main ブランチ->本番環境にデプロイ

## コンフリクト解消

1. プルリク先のブランチを自分のローカルに pull (develop[リモート] → develop )
2. ローカルで作業しているブランチに取り込み( develop → readme の修正(styleguide の名前) #68 )
3. git push origin {readme の修正(styleguide の名前) #68}

## Q & A

### Gulp の起動を停止したい

 → ` Ctrl + C ` で停止

### pull したらターミナルがエディタになってしまった

 → vi もしくは vim というエディタでの編集モードになっているので

` :q ` で抜けましょう。ただし、ターミナルの下に ` VISUAL ` とか ` INSERT ` と出ているとコマンドを受け付けないので ` esc ` キーで編集モードから抜けて ` :q ` と入力する必要があります。

*:qは同時押しではなく続けて入力するのでご注意

入力後 Enter（return） キーで確定すればエディタから抜けられます。

## 役に立つコマンド

### ブランチの作成方法

(.git が存在する階層で)
例として、
$ git checkout -b "#10"
構文: $ git checkout -b <新しいブランチ名>

### ブランチの移動方法

(.git が存在する階層で)
例として、
$ git checkout "#10"
構文: $ git checkout <移動したいブランチ名>

### 現在自分がいるブランチの確認方法

(.git が存在する階層で)
git branch
