# myTwit

Vue.jsの勉強のためにTwitter的なアプリを作る。

## 初期設定

```
$ php artisan migrate
$ php artisan db:seed
```

## Framework

Laravel 5.6

PHP7.1

mysql

## 概要設計

ツイート系の画面は1ページで作成
ツイート
ツイートの表示
→別ユーザーのツイート一覧

## API設計※未実装

/tweet/timeline # フォローしているユーザーのツイートを取得し、一覧表示

get
cookieでログインユーザのidを取得

/tweet/:userId  # userIdのツイートリストを取得
get


## DB設計

- users
    - id (primary)
    - code(unique)
    - name
    - email
    - password
    - created
    - modified

- tweets
    - id (primary)
    - user_id(foreign->user_id)
    - content
    - created
    - modified

- follow_relations
    - from_user_id (foreign->user_id, on delete cascade)
    - to_user_id(foreign->user_id, on delete cascade)
    - created
    - modified
    - unique(from_user_id, to_user_id)
