<?php
// menggunakan perintah foreach dan break
$nama = ['budi','hipzil','mawar','zaskia','rodi','abdul','huswah','rendi','fakih','nuro','muzhir','dian','agus','zoh'];
foreach($nama as $key => $nilai){
    echo"Nama:$nilai"."<br>";
    if($nilai == 'abdul'){
        echo " Abdul ada di indek ke $key "."<br>";
        // kita ingin menghentikan apabila sudah ketemu nama abdul maka kita menggunakan break
    break;
    }
}

?>