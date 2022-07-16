<?php
mb_internal_encoding('UTF-8');
$str = 'にわにはにわにわとりがいる';
print mb_strpos($str, 'にわ');
print '<br />';
print mb_strpos($str, 'にわ', 5);
print '<br />';
print mb_strpos($str, 'かに');
print '<br />';
print mb_strrpos($str, 'いる');
print '<br />';
print mb_strrpos($str, 'わに', -8);
