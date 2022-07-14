<?php
declare(strict_types=1);

mb_language('Japanese');
mb_internal_encoding('UTF-8');

function encodeHeader($value){
    return mb_encode_mimeheader
    (
        mb_convert_encoding($value, 'ISO-2022-JP', 'UTF-8'),
        'ISO-2022-JP',
        'B'
    );
}

$from = 'ryomaaa0602@gmail.com';

$to = 'arimura@to-r.net';

$subject = 'テストメール';

$body = <<< BODY
このメールはPHPからテスト送信したものです。
BODY;

$sender = encodeHeader('システム管理者');

$header = <<< HEADER
From: {$sender} <{$from}>
Reply-To: {$from}
HEADER;
$isMailSent = mb_send_mail($to, $subject, $body, $header);
echo $isMailSent ? 'メールを送信しました。' : 'メールを送信できませんでした。';
echo PHP_EOL;


