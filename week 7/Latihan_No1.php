<?php
    $x = 22;
    $y = 5;
    
    function swap(&$a,&$b){
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    echo "nilai sebelum ditukar :<br>";
    echo "a = $x<br>";
    echo "b = $y";

    echo "<br>nilai setelah ditukar :<br>";
    swap($x,$y);
    echo "a = $x<br>";
    echo "b = $y";
?>