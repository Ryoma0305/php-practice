<?php
require_once './MyUtil.php';

use const wings\selfphp\chap10\AUTHOR;
print AUTHOR;
print '<br />';
use function wings\selfphp\chap10\myFunc;
print myFunc();
