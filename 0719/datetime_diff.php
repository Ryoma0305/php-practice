<?php
$dt1 = new DateTime('2022/7/16 16:00:00');
$dt2 = new DateTime('2022/7/29 16:00:00');
$interval = $dt1->diff($dt2, true);
//print $interval->format('%Y年%M月%d日 %H時間%I分%S秒');
print $interval->format('総日数：%a');
