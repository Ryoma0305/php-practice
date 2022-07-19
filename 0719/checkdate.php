<?php
function calendar($year, $month) {
  for ($i = 1; $i < 32; $i++) {
    if (checkdate($month, $i, $year)) { print "{$i} &nbsp;"; }
  }
}

print '当月のカレンダ：<br />';
calendar(2022, 7);
