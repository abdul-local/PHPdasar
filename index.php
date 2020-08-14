<?php
$warna = ['merah','biru','kuning','merah','hijau','orange','ungu','biru','kuning','merah','hijau','orange','ungu','merah'];

$jumlah_merah = 0;
$jumlah_biru=0;
// kita mencari jumlah merah di dalam array dengan secara manual dulu
// if($warna[0] ='merah'){
//     $jumlah_merah ++;

// }
// if($warna[1]="merah"){
//     $jumlah_merah ++;
// }
// if($warna[2]="merah"){
//     $jumlah_merah ++;
// }
// echo $jumlah_merah;
// menggunakan cara ke yang lebih simple
// for($i=0; $i<14; $i++){
//     if($warna[$i] == 'merah'){
//         $jumlah_merah=$jumlah_merah+1;
//     }
   
// }
//pengecekan jumlah warna biru
for($i=0; $i<14; $i++){
    if($warna[$i] == 'biru'){
        $jumlah_biru=$jumlah_biru+1;
    }
}
echo "Jumlah warna biru adalah : " .$jumlah_biru;
?>