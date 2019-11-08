<?php
    $nama = "Irma Safitri";

    if(strlen($nama)<=10){
        $harga = strlen($nama)*300;
    } else if(strlen($nama)>10 && strlen($nama)<=20){
        $harga = strlen($nama)*500;
    } else if(strlen($nama)>20) {
        $harga = strlen($nama)*700;
    }

    echo "nama = $nama<br>";
    echo "harga bet= $harga";
?>