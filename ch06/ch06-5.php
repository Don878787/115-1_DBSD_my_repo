<?php
include "ch06-5-1.inc";
include_once "ch06-5-2.inc";
echo"EX01<br/>";
$amount = 1000;
$rate = 28.1;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=". $result ."元<br/>";

require ("ch06-5-1.inc"); 
$file = "ch06-5-1.inc";
require $file;

require_once ("about_me.php");