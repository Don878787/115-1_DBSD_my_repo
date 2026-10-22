<?php
include ("about_me.php");
echo"EX04<br/>";
$ip = $_SERVER["REMOTE_ADDR"];
echo "IP Address:". $ip ."<br/>";
$path = $_SERVER["SCRIPT_NAME"];
echo "PATH". $path ."";
?>
<table border="1">
    <tr>
        <td>IP Address</td>
        <td>PATH</td>
    </tr>
</table>