<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>名前空間3</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/Office/Word/Writer.php';
    //use Office\Word\Writer;
    //$writer = new Writer(); // WordのWriterクラスを使う
    use Office\Word\Writer;
    $writer = new Writer();
    $writer->write();
?>
</body>
</html>
