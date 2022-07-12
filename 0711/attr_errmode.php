<?php
require_once './DbManage.php';

try {
    $db = getDb();
    $db->exec('failed');
}catch (PDOException $e){
    print "エラーコード: {$e->getCode()} <br />";
    print "エラーメッセージ: {$e->getMessage()}";
}