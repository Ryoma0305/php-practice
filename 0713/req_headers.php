<?php require_once '../Encode.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ヘッダ情報</title>
</head>
<body>
<table border="1">
    <?php
    foreach ($_SERVER as $key => $value) {
        if(mb_strpos($key, 'HTTP_') === 0){
    }
    ?>
    <tr>
    <th><?= e($key) ?></th>
    <td><?= e($value) ?></td>
    </tr>
    <?php
    }}
    ?>
</table>
</body>
</html>

