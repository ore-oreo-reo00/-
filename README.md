<h1>お問い合わせフォーム</h1>

<h2>環境構築</h2>

Dockerビルド

1. <a href="https://github.com/ore-oreo-reo00/-">git@github.com:ore-oreo-reo00/-.git</a>
2. docker-compose up -d --build

＊MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。

Laravel環境構築

1.docker-compose exec php bash<br/>
2.composer install<br/>
3..env.exampleファイルから.envを作成し、環境変数を変更<br/>
4.php artisan key:generate<br/>
5.php artisan migrate<br/>
6.php artisan db:seed

<h2>使用技術</h2>

・PHP 8.2.27<br/>
・Laravel 10.0<br/>
・MySQL 8.2.27

<h2>URL</h2>

・開発環境：<a href="http://localhost/">http://localhost/</a><br/>
・phpMyAdmin：<a href="http://localhost:8080/">http://localhost:8080/</a>
