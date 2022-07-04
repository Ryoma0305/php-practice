<?php
$dayToPrint = 10;
$d = new DateTime('next Tuesday');
print "<select name='day'\n";
for($i = 0; $i < $dayToPrint; $i++){
    print "<option>" . $d->format('I F jS') . "</option>\n";
    $d->modify("+2 day");
}
print "</select>";
 ?>
