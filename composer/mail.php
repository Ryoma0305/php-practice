<?php
require_once 'vendor/autoload.pho';
$message = Swift_Message::newInstance();
$message->setFrom('ryomaaa0602@gmail.com');
$message->setTo(array('arimura@to-r.net' => 'Arimura Ryoma'));
$message->setSubject('テスト送信');
$message->setBody(<<<_TEXT_
Dear Ryoma,
Hello, Ryoma!
_TEXT_
);
 ?>
