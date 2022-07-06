<pre>
<?php
$str = ['PHP初級試験', 'PHP勉強中'];
$src = ['PHP', '勉強'];
$rep = ['JavaScript', '学習'];
print_r(str_replace($src, $rep, $str, $cnt));
print_r(str_ireplace($src, $rep, $str, $cnt));
print "{$cnt}個の置き換えをしました。";
