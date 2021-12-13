<?php
$DateTime = new DateTime();
// print $DateTime;
echo $DateTime -> format('Y-m-d');
echo "<br>";
echo $DateTime -> format("u");
echo "<br>";
echo $DateTime -> format("d");
echo "<br>";
echo $DateTime -> format("m");
echo "<br>";
echo $DateTime -> format("i:s");