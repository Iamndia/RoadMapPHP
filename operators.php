<?php

/*Arithmetic operators
Assignment operators
 Comparison operators
Increment/Decrement operators
 Logical operators
 String operators
 Array operators
 Conditional assignment operators*/



//aritmatika operator
$x = 15;
$y = 3;
$add = $x + $y;
$subtrac = $x - $y;
$multipli = $x * $y;
$division = $x / $y;
$modulo = $x % $y;
$exponen = $x ** $y; //pangkat

echo"
    tambah = $add,
    kurang = $subtrac,
    Kali = $multipli,
    Bagi = $division,
    Sisa bagi = $modulo,
    Pangkat = $exponen
    <br>
";

//Assigment operator(penugasan)
$a = 2;
$a += 2;
$a -= 3;
$a *= 5;
$a /= 2;
$a %= 2;
echo"a = $a <br>";

$m = 17;
$n = 6;
$equal = $m == $n;
$identical = $m === $n;
$notequal = $m != $n;
$greaterthan = $m > $n;
$lessthan = $m < $n;
$greatanOrequal = $m >= $n;
$lessthanOrequal = $m <= $n;

echo"
    Equal = $equal <br>,
    Identical = $identical <br>,
    Not Equal = $notequal <br>,
    Greater Than = $greaterthan <br>,
    Less than = $lessthan,
    Greater or equal = $greatanOrequal <br>,
    Less or equal = $lessthanOrequal <br>

";

//php increment / decrement operator
$j = 10;
echo ++$j ; //pre-increment
echo"<br>";
$i = 10;
echo $i++ ; //post-increment
echo"<br>";
$k = 10;
echo --$k ; //pre-decrement
echo"<br>";
$s = 10;
echo $s-- ; //post-decrement
echo"<br>";

//logic operator

//1. and (&&)
$nilai1 = 100;
$nilai2 = 50;
if ($nilai1 == 100 and $nilai2 == 50) {
    echo"Nadia keren";
}

//2. or (||)
$p = 100;  
$q = 50;

if ($p == 100 or $q == 80) {
    echo "Hello world!";
}

//3. not(!)
$z = 100;  

if ($z !== 90) {
    echo "Hello world!";
}

?>