<?php
function printHeader()
{
    echo "<h3>SID:C111181137</h3>";
    echo "<h3>Name:蔣沛恆</h3>";
    echo "EX06";
}
printHeader();
$weight = 75;
$bmi = function ($height) use ($weight) {
$height = $height / 100.0;
return $weight/$height/$height;
};