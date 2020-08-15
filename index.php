<?php
// menggunakan perintah foreach
$warna = ['merah','biru','kuning','merah','hijau','orange','ungu','biru','kuning','merah','hijau','orange','ungu','merah'];

$jumlah_merah = 0;
foreach( $warna as $key =>$value){
    echo " index ke $key berisi $value"."<br>";
    if($value=='merah'){
        $jumlah_merah=$jumlah_merah+1;
    }
}
echo" Jumlah warna merah adalah: ".$jumlah_merah;
?>