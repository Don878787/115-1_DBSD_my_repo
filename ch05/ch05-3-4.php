# SID: C111181137<BR>
# Name: 蔣沛恆<BR>
EX04
<HR>
<?php
$total = 0;
for ($i = 0; $i <= 15; $i++) {
    if (($i % 2) == 1) continue;
    print "|" . $i;
    $total += $i;
}
