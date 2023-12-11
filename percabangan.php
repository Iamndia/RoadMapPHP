<?php

    $umur = 9;
    if ($umur >= 18) {
        echo"Dewasa";

    }
    elseif ($umur >= 10) {
        echo "Remaja";
    }
    else {
        echo "Anak-anak";
    }

    //switch
    $color = "red";
    switch ($color) {
        case 'red':
            echo"your favorite color is red";
            break;
        
        case "Pink":
            echo "your favorite is pink";
        default:
            echo "dont have favorite";
            break;
    }

?>