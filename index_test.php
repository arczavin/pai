<?php

require_once 'Config/autoload.php';

$obj = new Osoba('Adam', 'srednie');
$obj2 = new Wyksztalcenie('wyższe');
$obj3 = new Osoba('Jennifer', 'srednie');


$student = new Student("10", "Andrzej", "średnie");
$student -> setNumerAlbumu("1337");
echo $student -> getNumerAlbumu();
echo "<br><br>";

if ($obj) { $nowyobiekt = $obj; 
} else {
  $nowyobiekt = new Object();
}
