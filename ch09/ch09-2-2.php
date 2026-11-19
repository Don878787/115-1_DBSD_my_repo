<?php
require("about_me.php");
echo "W11-EX02" . "<br/>";
echo "<HR>";

$file = "mybooks.txt";    // 檔案名稱
$content = "PHP與MySQL網頁設計範例教本\r\n";

$fp = fopen($file, "w")  // 開啟檔案
      or exit("檔案 $file 開啟錯誤<br/>");

if( fwrite($fp, $content)){
    echo "檔案 $file 寫入成功<br/>";
}else{
    exit("檔案 $file 寫入錯誤<br/>");
}

fclose($fp);  // 關閉檔案