<?php

    //upper case
    $x = "hello world";
    echo strtoupper($x);
    echo "<br>";

    //lower case
    $y = "Halo GaIS";
    echo strtolower($y);
    echo "<br>";

    //replace sttring
    //Fungsi PHP str_replace()menggantikan beberapa karakter dengan beberapa karakter lain dalam sebuah string.
    $a = "Hello World";
    echo str_replace("World","Dolly", $a);
    echo "<br>";

    //reverse a string(membalikkan string)
    $m = "Hello world";
    echo strrev($m);
    echo "<br>";

    //remove whitespace(menghapus spasi apapun dari awal atau akhir)
    $n = "Hello world";
    echo trim($n);
    echo "<br>";

    //convert string to array(mengubah string ke array)
    //explode() membagi string menjadi array, parameter pertama dari explode()fungsi tersebut mewakili pemisah. pemisah menentukan 
    //tempat untuk membagi string
    $b = "Hello gais";
    $c = explode(" ", $b);
    print_r($c);

?>