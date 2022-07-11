<?php
$a = abs(-100);
print $a;

if (abs(-100) > abs(-50)) {
    print "AAA";
}
if ("abc" > "xyz") {
    print "BBB";
} elseif ("567" < "890") {
    print "CCC";
}
print "<br>";
//左の値が右の値より小さい場合は負の数「-1」, 大きい場合は正の数「1」, 等しい場合は「0」
print strcmp("54321", "6789");

print "<br>";
//左の値が右の値より小さい場合は負の数「-1」, 大きい場合は正の数「1」, 等しい場合は「0」
print $ans = 2 <=> 22.5;
