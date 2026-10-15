<?php
function printHeader()
{
    echo "<h3>SID:C111181137</h3>";
    echo "<h3>Name:蔣沛恆</h3>";
    echo "EX05";
}
printHeader();
function callFunc1(Closure $closure)
{
    $closure();
}
function callFunc2(callable $callback)
{
    $callback();
}
$hello = function () {
    echo "Hello, World!<br/>";
};
function hi()
{
    echo "Hi, World!<br/>";
}
//callFunc1("hi");
callFunc1($hello);
callFunc2("hi");
callFunc2($hello);