<?php
require("about_me.php");
echo "W11-EX02" . "<br/>";
echo "<HR>";

$file = basename($_SERVER["PHP_SELF"], ".php");
$fp = fopen($file, ".php", "r")
    or exit("file: $file.php open failed<br/>");

echo "file: $file.php open successful<br/>";
echo "file size: " . filesize($file . ".php") . "<br/>";
fclose($fp);
echo "";