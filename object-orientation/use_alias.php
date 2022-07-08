<?php
require_once './MyClass.php';
require_once './sub/MyClass.php';

use wings\selfphp\chap10\MyClass;
use wings\selfphp\chap10\sub\MyClass as SubClass;

print MyClass::showClass();
print '<br />';
print SubClass::showClass();
