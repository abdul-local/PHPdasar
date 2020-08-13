<?php
// $nilai_tes = 85;
// $wawancara = 'A';

// bila test lebih dari 70
// if ($nilai_tes >= 70){
//     echo "Anda lulus";
//     if($wawancara =='A'){
//         echo "Predikat Anda sangat memuakan";
//     }else if($wawancara =='B'){
//         echo "predikat Anda memuaskan";
//     }else{
//         echo "predikat Anda cukup";
//     }
// }else{
//     echo " Maaf Anda belum lulus ";
// }
$psikotes=85;
$wawancara='lulus';
$kesehatan='lulus';
if($psikotes>=80){
    echo "Anda lolo psikotest ";
    if($wawancara ='lulus'){
        echo "Selamat anda lolos di test Wawancara ";
        if($kesehatan ='lulus'){
            echo "Selamat Anda di terima jadi pegawai BUMN";
        }else{
            echo "Mohon maaf anda di pulangkan";
        }
    }else{
        echo "mohon maaf anda tidak lolos";
    }
}else{
    echo "Mohon maaf anda tidak lolos";
}

?>