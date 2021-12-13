<?php

echo "<strong>FOR</strong> <br>";
for ($i=0; $i < 10 ; $i++) { 
    print $i;
    # code...
}
echo "<br>";
echo "<strong> FOR EACH</strong><br>";
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($array as $valor) {
    $poniendo= $valor."<br>";
    print $poniendo;
}

echo "<strong>WHILE</strong><br>";

$i = 1;
while ($i <= 4) {
    $sumando= $i++;
    $dataTog= $sumando." I can concat things<br>";
    echo $dataTog;
}

echo "<strong>DO WHILE</strong><br>";
$i = 1;
do {
    echo $i;
    $i++;
} while ($i <= 10);

