<?php

declare(strict_types=1);

//①まず＄_SESSIONの値を空の配列値で上書きする。これでPHPプロセスのメモリ上からはセッション変数の中身が消える。
//②次にdeleteSession関数を呼び出して、有効期限が過去の日時のセッションクッキーをクライアントに上書き送出することで、./DbManager.phpが書かれたセッションクッキーがクライアントから削除している。
//③最後にsession_destroy関数を呼び出して、サーバー上の保存されたセッションデータのファイルを削除している。
function deleteSession()
{
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params['path'], $params['domain'],
            $params['secure'], $params['httponly']
        );
    }
}
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>セッションの利用</title>
</head>
<body>
    <h2>お問い合わせ完了</h2>
    <p>お問い合わせありがとうございました。デバッグ情報：</p>
    <pre><?php print_r($_SESSION); ?></pre>
    <?php $_SESSION = []; ?>　<!-- ① -->
    <?php deleteSession(); ?> <!-- ② -->
    <?php session_destroy(); ?> <!-- ③ -->
</body>
</html>
