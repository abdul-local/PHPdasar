<?php
$warna ="Merah";
$ukuran="XL";

$biaya =80000;
$biaya_tambahan = 15000;
// pengecekan untuk ukuran XL dengan warna kain merah, dikenakan biaya tambahan
if($warna == 'Merah' && $ukuran =='XL'){
    echo "Total harga: ".($biaya+$biaya_tambahan);
}else{
    echo "Total harga: ".$biaya;
}

?>