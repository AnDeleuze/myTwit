# myTwit

Vue.jsの勉強のためにTwitter的なアプリを作る。

## Framework

Laravel 5.6?
PHP7.1
mysql

## 概要設計

ツイート系の画面は1ページで作成
ツイート
ツイートの表示
→別ユーザーのツイート一覧

## API設計

/tweet/timeline # フォローしているユーザーのツイートを取得し、一覧表示

get
cookieでログインユーザのidを取得

/tweet/:userId  # userIdのツイートリストを取得
get


## DB設計

- users
    - id
    - code(index)
    - name
    - mail
    - password
    - created
    - modified

- user_tweets
    - user_id
    - content
    - created
    - modified

- follow_relations
    - from_user_id (foreign->user_id, on delete cascade)
    - to_user_id(foreign->user_id, on delete cascade)
    - created
    - modified
