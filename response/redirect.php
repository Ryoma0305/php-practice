<?php

header('HTTP/1.1 307 Temporary Redirect');
header('Location: http://localhost:8080/redirected');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>header関数</title>
</head>
<body>
    別のサイトにリダイレクトします。
</body>
</html>
