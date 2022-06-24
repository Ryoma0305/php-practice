<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>継承</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/DigitalClock.php';
    $currentTime = strtotime('2022-06-24 17:15');
    $digitalClock = new DigitalClock();
    $digitalClock->setTime($currentTime);
    echo $digitalClock->show(); // 結果：17:15
?>
</body>
</html>
