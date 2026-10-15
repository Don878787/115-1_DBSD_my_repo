<?php
function printHeader()
{
    echo "<h3>SID:C111181137</h3>";
    echo "<h3>Name:蔣沛恆</h3>";
    echo "<h3>EX02</h3>";
}
function rateexchange($amount, $rate)
{
    $result = $amount * $rate;
    return $result;
}
$rate = rateexchange(1000, 32.5);
printHeader();
echo"Money:". $rate;
?>