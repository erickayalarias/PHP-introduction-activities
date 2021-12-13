<?php
$creatingAnArray = ("a, b, c");
echo $creatingAnArray;
echo "<br>";
$creatingAnArrayNumber = ("1, 2 , 3.6");
echo $creatingAnArrayNumber;
$creatingAnArrayNumbert = ("1, 2 , 3.6, pera, manzana");
echo "<br>";
echo $creatingAnArrayNumbert;
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  echo "<br>";
  echo $cars[0][0];
  echo "<br>";

  $creatingAnArrayi= array("pepe", "pedro", "pasr");
  $creatingAnArrayiaa= array("pepe", "pedro", "pasr");
  $pepe=  array_merge($creatingAnArrayi, $creatingAnArrayiaa);
  echo count($creatingAnArrayi);
  echo "<br>";
  var_dump($pepe);
  echo "<br>";
  echo end( $creatingAnArrayi);
  echo "<br>";
  array_push($creatingAnArrayi, "pera");
  var_dump($creatingAnArrayi);
  