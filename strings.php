<?php
print "'Text in string'";
echo "<br>";
$ts = "'text called in a var'";
print $ts;
$cncat= $ts." concat with .";
echo "<br>";
print $cncat;
echo "<br>";
$phrase  = "bacon, vegetables, and macarroni every day.";
$healthy = array("bacon", "vegetables", "macarroni");
$yummy   = array("pizza", "beer", "ice cream");
$newphrase = str_replace($healthy, $yummy, $phrase);
echo $newphrase;
echo "<br>";
echo str_ireplace("WORLD","Erick","Hello world!");
echo "<br>";
echo str_repeat("Erick", 10);
$nmbre= "Erick";
echo "<br>";
echo strlen($nmbre);
echo "<br>";
echo strpos("I love php, I love php too!","php");
echo "<br>";
$findtext = 'Esta es la';
$looktheword   = 'la';
$whereitis = strpos($findtext, $looktheword);
echo $whereitis;
echo "<br>";
$nametoUpper= "Erick Ayala Arias";
echo strtoupper($nametoUpper);
echo "<br>";
echo strtolower($nametoUpper);
echo "<br>";
$rest = substr("Erick", -1);
echo $rest;