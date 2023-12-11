<?php

    function myMessage() {
        echo"hello world <br>";
    }
    myMessage();

    //function argumentasi
    function family($name) {
        echo "$name refnes <br>";
    }
    family("Jani");

    //function argumentasi dengan 2 variabel
    function bio($name, $umur) {
        echo "Nama $name Umur $umur";
    }
    bio("Nadia","19 <br>");  

    //function dengan return
    function sum($x, $y) {
        $z = $x + $y;
        return $z;
    }
    echo"5 + 10 = " . sum(5,10) . "<br>";

    //function pass-by-reference
    function add_five(&$value){
        $value += 5;
    }
    $num = 2;
    add_five($num);
    echo $num . "<br>";

    //function variabel number of arguments
    //Dengan menggunakan ...operator di depan parameter fungsi, fungsi tersebut menerima argumen dalam jumlah yang tidak diketahui. 
    function sumNumber(...$x){
        $n = 0;
        $len = count($x);
        for ($i = 0; $i < $len; $i++){
            $n += $x[$i];
        }
        return $n;
    }
    $a = sumNumber(5,2,6,2,7,7);
    echo $a ."<br>";

    function myfamily($lastname, ...$firstname) {
        $txt = "";
        $len = count($firstname);
        for ($i = 0; $i < $len; $i++){
            $txt = $txt. "HI, $firstname[$i] $lastname. <br>";
        }
        return $txt;

    }
    $a = myfamily("Doe","Jane","John","Joyy");
    echo $a ."<br>";

?>