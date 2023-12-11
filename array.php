<?php

$cars = array("volvo", "BMW", "Toyota");
echo "I like $cars[0] , $cars[1], and $cars[2]";

//loop through an indexed array
$arrlenght = count($cars);
for ($x = 0; $x  < $arrlenght; $x++) {
    echo "<br> $cars[$x]";
}


//array associative
$age = array("Peter" => "35", "Nadia" => "19");
echo "Nadia is " . $age['Nadia'] . "years old <br><br>";

//array multidimention
$mobil = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("saab", 16, 13),
    array("Toyota", 17, 15)
);
echo $mobil[0][0] . " : in stock: " . $mobil[0][1] . ", sold " . $mobil[0][2] . ".<br>";
echo $mobil[1][0] . " : in stock: " . $mobil[1][1] . ", sold " . $mobil[1][2] . ".<br>";
echo $mobil[2][0] . " : in stock: " . $mobil[2][1] . ", sold " . $mobil[2][2] . ".<br>";
echo $mobil[3][0] . " : in stock: " . $mobil[3][1] . ", sold " . $mobil[3][2] . ".<br>";


for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $mobil[$row][$col] . "</li>";
    }
    echo "</ul>";
}
echo "<br>";

$motor = array("honda", "yamaha", "suzuki");
sort($motor);
$clength = count($motor);
for ($x = 0; $x < $clength; $x++) {
    echo $motor[$x];
    echo "<br>";
}
