<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>配列を文字列に変換する</title>
</head>
<body>
<pre>
<?php
    $hobbies = ['テニス', '散歩', 'バッティング練習'];
    $hobbiesAsString = implode('・', $hobbies);
    echo '趣味：', $hobbiesAsString, PHP_EOL;

    $birthday = ['1991', '3', '5'];
    $birthdayAsString = implode('-', $birthday);
    echo "誕生日：$birthdayAsString", PHP_EOL;
?>
</pre>
</body>
</html>
