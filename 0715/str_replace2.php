<pre>
<?php
$str = ['PHPは良い言語です。', 'PHPは良いサーバ実行環境です。'];
$src = ['は', 'です', '言語'];
$rep = ['も', 'だ'];
//print_r(str_replace($src, $rep, $str, $cnt));
print_r(str_replace($src, $rep, $str, $cnt));
print "{$cnt}個の置き換えをしました。";
