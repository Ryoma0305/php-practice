<?php
//$result = shell_exec("dir {$_GET['param']}");
$param = escapeshellarg($_GET['param']);
$result = shell_exec("dir {$param}");
print $result;