<pre>
<?php
require_once './DbManager.php';

$db = getDb();
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
// $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
// $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
print_r($db->query('SELECT * FROM book')->fetchAll(PDO::FETCH_ASSOC));
