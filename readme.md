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
` git checkout -b "#10" `

構文: ` git checkout -b <新しいブランチ名> `

### ブランチの移動方法

(.git が存在する階層で)

例として、
` git checkout "#10" `

構文:` git checkout <移動したいブランチ名> `

### 現在自分がいるブランチの確認方法

(.git が存在する階層で)
` git branch `

### main（またはdevelop）にpullできないとき(`git pull origin main` などできないとき)

(.git が存在する階層で)

` git checkout. `

前回コミットしたところまで戻る（addする前まで戻る）※変更分は上書きされてしまうので要注意

### コミット前の内容を一時的に避ける（作業中だけど別のブランチに切り替えたいときなど）

(.git が存在する階層で)

` git stash `

 → 変更内容を退避する

` git stash -u `

 → untracked filesも含めるとき

` git stash save "コメント" `

 → コメントをつけるとき

` git stash list `

 → 保存したリストの表示

` git stash apply `

 → 退避した内容を今いるブランチに適用する（複数ある時は直近が反映される。リストからは消えない。）

` git stash pop `

 → 退避した内容を今いるブランチに適用させ、リストから削除する

` git stash drop `

 → 直近の内容を削除

` git stash drop stash@{1} `

 → 指定した番号を削除

` git stash clear `

 → 退避した内容の全てを削除

 ## データ取り込み フロー

### 流れ


### ①データ取得(export)

*新しくdumpデータをdevelopから取得したい時のみ実行


develop環境で実行する

`cd /home/rietime/www/urushitoki`
` wp db export <ファイル名> `
（例 ： ` wp db export wordpress_20210901.sql `）

成功すると以下が表示される
` Success: Exported to 'wordpress_20210901.sql'.`

・dump済みのファイルはesaから取得できる
 *データは最新日付の使用を推奨

https://urushitoki.esa.io/posts/35


### ②ローカルでのデータ取り込み(import)

ここからはlocalでの作業にうつる
localの管理画面(緑のやつ)からプロジェクト一覧の該当プロジェクトを右クリックして「open site shell」をクリックで、WP-CLIのターミナルが立ち上がる

データのエクスポートの実施
local環境でコマンド
` wp db import <ファイル名> `

（例 ：
` wp db import  /Users/<各自のパス>/wordpress_20210901.sql `
または、publicがカレントディレクトリの状態で
` wp db import wordpress_20210901.sql `
）


成功すると以下が表示される
` Success: Imported from '/Users/isa/Desktop/wordpress_20210901.sql'.`

### ③WordPress内の設定

1.  データベース内文字列置換

local環境でコマンドを実施
` wp search-replace 'http://fp.rash.jp/urushitoki' <自分のローカルのsitetopのurl>`
（例 ： ` wp search-replace 'http://fp.rash.jp/urushitoki' 'http://urushitokilocal.local'`）
*それぞれの環境でurl違う可能性あり

2. プレフィックスの変更する

以下のファイルの変数の中身を変更する
/urushitokilocal/app/public/wp-config.php

` $table_prefix = 'wp_';`

↓

` $table_prefix = 'wpe81544';`

3. siteurlやhomeの確認

自分のローカルのパスであっているか確認する(特にwpe81544optionsのsiteurlやhome)
間違っていたらローカル管理画面のDATABASE ->OPEN ADMINERから
開いて、テーブルのデータを手動変更する


siteurlとhome
(例)

` http://fp.rash.jp/urushitoki/`

↓

` http://urushitokilocal.local`

*上記まで実行してうまくいかない時はキャッシュクリアしてみること

4. upload 画像の反映

うるしときのdropboxに下記zipを置いておくので、

` backup_20211204uploads.zip`

取得して
` urushitokilocal/app/public/wp-content/uploads`
uploadsフォルダを入れ替える

5. プラグイン有効化


` wp plugin install duplicate-post show-current-template smart-custom-fields snow-monkey-forms duplicate-post`

` wp plugin activate --all`



### イレギュラー対応
#### ②ローカルでのデータ取り込み(import)でwpコマンドが効かない場合

` wp db import <ファイル名> `が効かない場合はmysqlコマンドでデータを取り込む

1. MySQLへログイン
`$ mysql -u [MySQLのユーザ名] -p`

例：ユーザー名がrootなら`mysql -uroot -p`


上記を打つとPWを要求されるので従って入力する

ユーザー名とパスワードは

`C:\Users\ユーザー名\Local Sites\urushitokilocal\app\public\wp-config.php` で確認できる


2. データを展開する宛先（データベース名）を指定

`mysql> use db_name`

例：データベース名がlocalなら`use local`

localのDATABASEタブ＞Connect＞OPEN ADMIERよりデータベースにアクセスできる

3. 読み込みたいファイルのパスを指定

`mysql> source /Users/ユーザー名/Desktop/example.sql`

sqlファイルをデスクトップに解凍していれば上記のようになる

成功すると`Query OK, n rows affected(0.00sec)`が大量に表示され、
2で指定したデータベースにデータが格納されていることがAdmierから確認できる

#### ③WordPress内の設定でwpコマンドが効かない場合

` wp search-replace 'http://fp.rash.jp/urushitoki' 'http://urushitokilocal.local'`

が効かない場合、イレギュラー版のsqlファイル（URLの置換が完了しているもの）を使用する

こちらで取り込めば既にURLの置換が済んでいるため、③の対応そのものが不要となる
https://urushitoki.esa.io/posts/35

※local環境を`urushitokilocal`で作成していない場合はうまく効かない可能性あり

#### ③WordPress内の設定でDropboxからzipデータを解凍するとファイル名が文字化けする場合

Mac⇔Winの差によるもの
https://itojisan.xyz/%E3%83%91%E3%82%BD%E3%82%B3%E3%83%B3%E3%81%AE%E3%83%88%E3%83%A9%E3%83%96%E3%83%AB/windows10%E3%81%A6%E3%82%99zip%E3%83%BBrar%E3%82%92%E8%A7%A3%E5%87%8D%E3%81%99%E3%82%8B%E3%81%A8%E6%96%87%E5%AD%97%E5%8C%96%E3%81%91/

こちらを元にWindowsのシステムロケール設定を確認する

