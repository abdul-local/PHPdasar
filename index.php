<?php

$alas=10;
$tinggi=25;
// $kalimat = "Saya suka pizza,yang dagingnnya tebal ";
// echo str_replace('pizza','hamburger',$kalimat);
// echo $kalimat;
function luassegitaga($alas,$tinggi)
{
    $luas =($alas * $tinggi)/2 ;
    return $luas;
}
echo luassegitaga($alas,$tinggi)."<br>";
    // $hasil = luassegitaga($alas,$tinggi);
    // echo $hasil;
function luasjajargenjang($alas,$tinggi){
    $luas = $alas * $tinggi ;
    return $luas;
}
echo luasjajargenjang($alas,$tinggi);

?>