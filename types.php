<?php

echo "<br><strong>boolean</strong><br>";
$bl= true;
echo $bl;
echo "<br><strong>integer</strong><br>";
$intg= 3;
echo $intg;
echo "<br><strong>float</strong><br>";
$float= 3.12;
echo $float;
echo "<br><strong>string</strong><br>";
$str= "this is a string";
echo $str;
echo "<br><strong>Array</strong><br>";
$arr = array("foo", "bar", "hello", "world");
var_dump($arr);
echo "<br><strong>Object</strong><br>";
$obj = (object) 'ciao';
echo $obj->scalar; 
echo "<br><strong>Null</strong><br>";
$var = NULL;
echo $var;
