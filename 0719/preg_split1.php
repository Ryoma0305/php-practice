<?php
$today = '2016-05-14';
$result = preg_split('|[/.\-]|', $today);
print_r($result);
print "{$result[0]}年{$result[1]}月{$result[2]}日";
