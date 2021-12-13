<?php
$DateTime = new DateTime();
$dayn= $DateTime -> format("d");
$day= $DateTime -> format("l");
$Month= $DateTime -> format("F");
$Minutes= $DateTime -> format("i");
if ($day == "Monday"){
    echo "We are in Monday";
}
echo "<br>";
if($Month == "October"){
    echo "We are in October";
}else{
    echo "We are not in October";
}
echo "<br>";
if($Minutes < 10){
    echo "the current minute is less than 10";
}else if($Minutes > 15){
    echo "the current minute is more than 15";
}else {
    echo "does not meet any conditions";
}

echo "<br>";

switch ($dayn) {
    case 28:
        echo "today is  28";
        break;
    case 13:
        echo "today is 13";
        break;
    case 2:
        echo "today is 2";
        break;
}
