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

デフォルで Local を登録している場合の移動コマンド

``` cd ~/Local\ Sites/urushitoki/app/public/wp-content/themes/urushitoki ```

パッケージインストール

``` npm install ```

## 5. gulpを起動

Local の Site Domain が urushitoki.local の場合

```npx gulp ```

Site Domain が別の場合

``` npx gulp --domain "サイトのドメイン" ```  

※サイトのドメイン名は Local の "Site Domain" を入力

## 5. コーディング
PHP、Sass、Jsファイルの編集は```production```の中で行って下さい。

【基本的な動作】  
・Dart Sassコンパイル=>ベンダープレフィックス自動付与、メディアクエリの整理  
・起動時ローカルサーバーの立ち上げ  
・production/sass・php・jsファイルの変更を監視。変更があった場合はブラウザを自動でリロード。  
※sassの変更に関してはリロードは行われず、変更部分だけ反映されます。

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
5. コマンドを実行し、styleguide の作成

``` npx gulp styleguide ```

## ブランチについて

必ず ` issue ` の番号をブランチ名に含めてください。この時 #も必要なので

` git branch "#1" ` という具合に、クォーテーションをつけましょう

## Git ワークフロー

1. 担当する issue に Assign
2. main ブランチから issue ブランチを作成
3. issue ブランチから main に対してプルリクエスト作成（ Reviewers に誰かを入れてレビューを受ける ）
4. 取り込みが完了し、issue の開発が終わったら GitHub と ローカルからブランチを削除

基本的に誰かにソースレビューを受けてマージしましょう。どうしても人が居ない場合や取り急ぎの場合は仕方なし。
その場合必ず main ブランチに支障が出ていないかチェックを忘れずに

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
git checkout -b <新しいブランチ名>

### ブランチの移動方法

(.git が存在する階層で)
git checkout <移動したいブランチ名>

### 現在自分がいるブランチの確認方法

(.git が存在する階層で)
git branch
