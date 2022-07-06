<?php
mb_internal_encoding('UTF-8');
$str = 'おはようございます。こんにちは。今日もお仕事頑張りましょう。';
print mb_strlen($str);
print '<br>';
print strlen($str);
//print strlen($str);
