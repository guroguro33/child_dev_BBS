# 発達相談WEB
 
## アプリケーションの概要
 
Laravelとvue.jsを使った発達相談に関する質問掲示板サイトです。
[デモページ](https://kurosuke-web.com/child-dev-bbs/)

デモサイトでご利用ください

ログインID：test@example.com

パスワード：password

## 画面イメージ ##
 
![TOPイメージ](https://user-images.githubusercontent.com/48667277/87255736-582bf300-c4c8-11ea-85a1-a80205b0a862.png)
 
## 機能と環境
 
- 新規登録・ログイン・ログアウト・パスワードリマインダ
- 投稿（質問と回答）に関するCRUD機能
- マイページ
- タグによるソート機能（vue.js）
- ページ遷移（vue router）
- ページネーション
- 多対多のリレーション（中間テーブル使用）
- お気に入り機能（axios）
- 開発環境: laravel homestead（VirtualBox + Vagrant + Homestead）
- データベース: MySQL
- デモページ環境: Xsever
 
## 必要要件
 
- php: 7.1.3
- Laravel: 5.8
- axios: 0.19
- jQuery: 3.2
- sass: 1.15.2
- vue: 2.5.17
- vue-router: 3.3.2
 
## 使い方
 
1. トップページから見たい質問をクリックして回答を確認する。
2. トップページで「タグ」クリックするとタグ一覧が表示され、タグによる絞り込みが可能。
3. ログイン後、マイページで自分の投稿した質問と回答が表示される。
4. ログイン後、質問詳細ページから回答を投稿することが可能
5. ログイン後、質問詳細ページから自分の質問であれば編集リンクが表示
6. ログイン後、質問詳細ページから自分の回答であれば削除ボタンが表示
 
## 設計資料
 
1. [要件定義](https://docs.google.com/spreadsheets/d/1WsrrEG_yLDkcWZoVVTVjKHtMI3T8MTQ36itLp0MqKe8/edit?usp=sharing)
2. [ER図](発達質問サイトER図.drawio.pdf)
  
## 作者

* 作成者：くろすけ
* Twitter：[@guroguro33](https://twitter.com/guroguro33)
 
## ライセンス
 
"child_dev_BBS" is under [MIT license](https://en.wikipedia.org/wiki/MIT_License).