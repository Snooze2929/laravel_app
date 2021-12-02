# このソースコードについて

プログラミングスクールにてlaravelを少し学ぶことができました。教材のバージョンが5.5でした。現在は6系がltsということで復習も兼ねて6系のバージョンで学び直し、掲示板の作成をいたしました。

# 詳細

トップ画面　http://localhost/login
phpmyadmin: http://localhost:8081

# 課題開発環境のまとめ

php7.4
mysql8.0
phpmyadmin

# 内容

認証機能の実装
phpartisan migrateによるテーブルの追加
php artisan make controller --resourceによるCRUD機能の追加

### dockerの起動・停止

~/MyDocker/lamp_practice/lamp_dock ディレクトリに移動し、

``` 
cd laravel_app/laradock
docker-compose up -d workspace nginx mysql phpmyadmin
```
でコンテナを起動します。

```
docker-compose down
```
で停止、コンテナ削除が可能です。


```
docker exec -it --user=laradock laradock_workspace_1 bash
```
でコンテナ内をbashで操作できます。


#　感想

1番苦労した点は、laravel6系ではauthの使い方が大幅に変更されているということで、初心者の自分には中々一筋縄にはいかない作業でした。
当初、機能の実装自体はすんなり出来たものの、cssが全く適用されていないログイン画面でした。6系から必要なパッケージをユーザー自身で選びインストールしなくてはならないことに気づき、laravel/uiとnpmをインストールしました。いざnpm run devを実行してもエラーが出てしまい、苦戦しました。最終的にはdockerにデフォルトでインストールされているnodeがver17ではnpm run devに対応していないことに気づき、nvm install v16.13.0でnodeをダウングレードしnpm run devをした所、cssの適用された認証画面の実装に成功しました。この点に一番時間が掛かり苦労しました。
ミドルウェアやlaravelにおけるsession等には触れておらずまだ基本の一部しか学べていないので今後ともこれで満足せずに学習に励みます。