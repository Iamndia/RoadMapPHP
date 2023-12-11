<?php

//while
    $x = 5;
    while ($x <= 10) {
        echo"nomor is $x <br>";
        $x++;
    }

    //do while
    $y = 1;
    do {
        echo "the number is $y <br>";
        $y++;
    } while ($y <= 10);


    //for loop
    for ($i=0; $i < 10 ; $i++) { 
        echo "Nadia kerennnn";
    }

    //foreach loop
    $color = array("red","pink","green","blue","yellow","black","white") ;
    foreach ($color as $key => $value) {
        echo "<br> $value ";
    }

    $age = array("peter" => "35","ben "=>"37") ;
    foreach ($age as $k => $val) {
        echo "$k = $val <br>";
    }

?>