<?php
function getDb() {
    $dsn = 'mysql:host=localhost; dbname=honkaku; charset=utf8';
    $usr = 'root';
    $passwd = '';
    $db = new POD($dsn, $usr, $passwd);
    $db->setAttribute(PDÒ::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}