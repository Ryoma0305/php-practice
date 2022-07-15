<?php
print $title = <<<EOM
模擬試験不正解解答
<br>
<br>
EOM;


print $q3 = <<<EOM
問題3<br>
テキスト操作に関するコードの説明のうち、誤っているものはどれか。
あなたの回答: 「print str_replace('【A】', '3', 'I have {num} cats.');」の【A】には{num}が入り、実行結果は「I have 3 cats.」となる。
正答: 「print substr('abcde', 0, 3);」の実行結果は「abcd」である。
<br>
実行結果
<br>
EOM;

print substr('abcde', 0, 3) . "<br><br>";

/*
$a = 2 + 3 * 6;
print $a . "<br>";
$b = $a % 7;
$c = $b ** 2;
print($c);
*/


/*
$n = 2;
$p = 3;

++$n;
//$n = 3;

$p *= 2;

//$p = 6

$a = "$n, $p";

//$a = "3, 6"

--$n;
//$n = 2;

$p *= 3;
// $p = 18;

$b = "$n, $p";
//$b = "2, 18"

print $a . ' / ' . $b;
*/

/*
$val = 'a';
$val = 'b';
print ('【A】' . $val);

function func($val = 'c') {
    $val = 'd';
    print ('【B】' . $val);
    global $val;
    print ('【C】' . $val);
    $val = 'e';
    print ('【D】' . $val);
    $val = 'f';
}
*/

//print $_SERVER['PHP_SELF'];
//print $_SERVER['SERVER_NAME'];


print $q23 = <<<EOM
問題23<br>
テーブル「flowers2」に次のようなデータがある場合に、以下のコードの実行結果として正しいものはどれか。<br>

[ データ ]<br>
+-----------+-------------+--------+<br>
| flower_id | flower_name | price |<br>
+-----------+-------------+--------+<br>
| 1                | rose             | 450.00 |<br>
| 2                | tulip            | 730.00 |<br>
| 3                | carnation   | 300.00 |<br>
| 4                | violet           | 400.00 |<br>
| 5                | pansy          | 400.00 |<br>
+-----------+-------------+--------+<br>
<br>
[ コード ]<br>
try{<br>
    \$db = new PDO(\$dsn, \$user, \$password);<br>
} catch (PDOException \$e){<br>
    echo 'Connection failed'. \$e->getMessage();<br>
}<br>
<br>
\$q = \$db->query("SELECT * FROM flowers2 where price > 350 ORDER BY price DESC, flower_name");<br>
<br>
while (\$row = \$q->fetch()) {<br>
    print "\$row[flower_name]".", ";<br>
}<br>
あなたの回答: tulip, rose, violet, pansy,<br>
正答: tulip, rose, pansy, violet,<br>
<br>
<br>
\$q = \$db->query("SELECT * FROM flowers2 where price > 350 ORDER BY price DESC, flower_name");<br>
ORDER BYの並び替えキーワードは無指定時はASCになる。また複数のカラムを指定することができる。その場合の優先順位は、先に指定したカラムがより優先される。<br>
<br>
<br>
EOM;




print $q24 = <<<EOM
問題24<br>
\$page = 【A】('template.html');<br>
\$date = date("Y-m-d H:i:s");<br>
\$page = 【B】('{today}', \$date, \$page);<br>
<br>
if (date('H')<12){<br>
    \$page = 【B】('{hello}', 'Good morning!',\$page);<br>
} elseif(date('H')>=12 && date('H') < 18) {<br>
    \$page = 【B】('{hello}', 'Good afternoon!',\$page);<br>
} else {<br>
    \$page = 【B】('{hello}', 'Good evening!', \$page);<br>
}<br>
<br>
正答: 【A】file_get_contents　【B】str_replace　【C】file_put_contents('page.html', \$page)<br>
<br>
■file_put_contents関数<br>
int file_put_contents ( string \$filename , mixed \$data [, int \$flags = 0 [, resource \$context ]] )<br>
<br>
引数<br>
\$filename<br>
文字列データを書き込むファイル名を指定します。<br>
\$data<br>
ファイルに書き込むデータを指定します。<br>
文字列や配列が指定可能です。<br>
\$flags<br>
フラグを指定します。フラグは以下の3つです。<br>
・FILE_USE_INCLUDE_PATH → インクルードパスを使用<br>
・FILE_APPEND → ファイルを追記モードで開く<br>
・LOCK_EX → 書き込み中にファイルをロック<br>
複数のフラグを指定する場合は論理演算子OR( | )を使います。<br>
\$context<br>
独自のコンテキストを使用する場合に指定します。<br>
返り値<br>
ファイルに書き込むまれたバイト数をint型で返します。<br>
書き込みに失敗した場合には、falseを返します。<br>
<br>
<br>
EOM;

print $q26 = <<<EOM
問題26<br>
クッキーの設定に関する次の記述のうち誤っているものはどれか。<br>
あなたの回答: setcookie()関数の第6引数にtrueの値を指定すると、URLがhttpsで始まる安全な接続でのみクッキーを送るようにWebクライアントに通知される。setcookie()関数の第7引数にtrueの値を指定すると、HTTPを通してのみクッキーにアクセス可能となる。これはクロスサイトスクリプティング攻撃をある程度予防することになる。<br>
正答: setcookie()関数の第1引数にはクッキーの名前を、第2引数にはクッキーの値を指定する。setcookie()に指定するクッキーの値には、文字列か数字、配列を使うことができる。


■setcookie関数<br>
setcookie(<br>
    string \$name,<br>
    string \$value = "",<br>
    int \$expires_or_options = 0,<br>
    string \$path = "",<br>
    string \$domain = "",<br>
    bool \$secure = false,<br>
    bool \$httponly = false<br>
): bool<br>
第二引数のクッキーの値にはstring型のみ
<br>
<br>
EOM;


print $q30 = <<<EOM
問題30<br>
エラーに関する次の記述のうち誤っているものはどれか。<br>
あなたの回答: error_reporting構成ディレクティブはPHPエンジンが報告するエラーの種類を制御する。<br>
正答: PHPはパースエラーが発生するとプログラムの動作を停止する。ほかにプログラムの動作が停止されるのは、Fatal ErrorとWarningが発生した場合である。<br>
プログラムが停止するのはFatal ErrorとFatal Errorのみ。<br>
<br>
■error_reporting<br>
error_reporting — 出力する PHP エラーの種類を設定する<br>
error_reporting(?int \$error_level = null): int<br>
<br>
<br>
EOM;

print $q31 = <<<EOM
問題31<br>
デバッグに関する次の記述のうち誤っているものはどれか。
あなたの回答: 編集中のファイルとWebブラウザで見ているページが同期していることを確認するには、「die('This is:' . __FILE__);」のようなdie()を呼び出す行をプログラムの先頭に一時的に追加する方法がある。
正答: デバッグ出力に配列を含めるには、配列のうち一部の特定要素の詳細を出力するvar_dump()が便利である。<br>
<br>
■die関数<br>
メッセージを出力し、現在のスクリプトを終了する<br>
<br>
<br>
EOM;

print $q31 = <<<EOM
問題31<br>
デバッグに関する次の記述のうち誤っているものはどれか。
あなたの回答: 編集中のファイルとWebブラウザで見ているページが同期していることを確認するには、「die('This is:' . __FILE__);」のようなdie()を呼び出す行をプログラムの先頭に一時的に追加する方法がある。
正答: デバッグ出力に配列を含めるには、配列のうち一部の特定要素の詳細を出力するvar_dump()が便利である。<br>
<br>
■die関数<br>
メッセージを出力し、現在のスクリプトを終了する<br>
<br>
<br>
EOM;



?>
