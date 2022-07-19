<?php
/* ファイルポインタをオープン */
$fp = fopen("test.txt", "r");

/* 1.ファイルが最後まで読み込まれたかどうかを確認 */
var_dump( feof($fp) ) . "<br>.";

if($fp){
  while ($line = fgets($fp)) {
    // ファイルを1行ずつ読み込む
    var_dump( feof($fp) ) . "<br>.";
  }
}

/* 2.ファイルが最後まで読み込まれたかどうかを確認 */
var_dump( feof($fp) ) . "<br>.";

/* ファイルポインタをクローズ */
fclose($fp);
?>
