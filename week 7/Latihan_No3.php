<?php
function faktorial($angka){
     $hasil= 1;
     $x = $y;
    for($i=$angka; $i>0; $i--){
        $hasil = $hasil * $i;
    }
    echo "xFaktorial dari $angka adalah $hasil " ;
}
$angka = 4;
faktorial($angka);
?>