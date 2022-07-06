<?php
mb_internal_encoding('UTF-8');
$str = 'PHP初級試験';
print mb_substr($str, 3, 3);
$str2 = 'サーバーサイド技術';
print mb_convert_kana($str2, 'K');

print mb_convert_encoding($str2, 'EUC-JP', 'SJIS');
?>
