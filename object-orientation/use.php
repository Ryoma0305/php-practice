<?php
require_once './MyClass.php';
require_once './MyClass2.php';
require_once './MyClass3.php';

use wings\selfphp\chap10\MyClass;
print MyClass::showClass();
print '<br />';

//use wings\selfphp\chap10\MyClass2, wings\selfphp\chap10\MyClass3;
use wings\selfphp\chap10\{MyClass2, MyClass3};
print MyClass2::showClass();
print '<br />';
print MyClass3::showClass();
