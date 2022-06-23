<?php

declare(strict_types=1);

function validate()
{
    return ($_POST['email'] !== '' && $_POST['message'] !== '');
}
session_start();

//送信ボタンをクリックしたときは、条件①に入る。条件①でValidate関数で入力データが空欄でないか調べる。空欄があった場合は条件①-Aに入り、input.phpを再表示する。
//空欄がなければ条件①-Bに入り、セッション変数$_SESSIONに入力データを保存し、confirm.phpに画面遷移する。
//条件②に入るのは、confirm.phpの「戻る」リンクを使ってinput.phpに戻った時。この処理で、$_SESSIONを元に入力値を復元している。

// 条件①
if (isset($_POST['operation']) && $_POST['operation'] === 'inquiry') {
    // 条件①-A
    if (validate() === false) {
        $message = 'メールアドレス・お問い合わせ内容のいずれも必須入力です。';
        $data = [
            'email' => $_POST['email'],
            'message' => $_POST['message']
        ];
    // 条件①-B
    } else {
        $_SESSION['data'] = [
            'email' => $_POST['email'],
            'message' => $_POST['message']
        ];
        header('Location: confirm.php');
        return;
    }
// 条件②
} elseif (isset($_SESSION['data'])) {
    $data = [
        'email' => $_SESSION['data']['email'],
        'message' => $_SESSION['data']['message']
    ];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>セッションの利用</title>
</head>
<body>
    <h2>お問い合わせ入力</h2>
    <?php if (isset($message)) : ?>
        <p style="color:red"><?=$message?></p>
    <?php endif; ?>
    <form name="inquiry-form" action="" method="POST">
        ●メールアドレス：<br>
        <input type="text" name="email" value="<?=isset($data['email']) ? $data['email'] : ''?>"><br>
        ●お問い合わせ内容：<br>
        <textarea name="message" cols="30" rows="4"><?=isset($data['message']) ? $data['message'] : ''?></textarea><br>
        <button type="submit" name="operation" value="inquiry">送信</button>
    </form>
</body>
</html>
