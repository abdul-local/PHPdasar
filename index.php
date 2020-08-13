<?php 
// $nilai ='A';
// if($nilai=='A'){
//     echo "Nilai Anda sangat memuaskan ";

// }else if($nilai == 'B'){
//     echo " Nilai Anda memuaskan ";
// }else if ($nilai == 'C'){
//     echo " Nilai Anda cukup ";
// }else{
//     echo " mohon maaf nilai anda jelek ";
// }

$nilai = 'C';

switch($nilai){
    case 'A':
        echo "nilai Anda sangat memuakan ";
    break;
    case 'B':
        case 'B':
            echo " Nilai Anda memuaskan";
    break;
    case 'C':
        echo " Nilai Anda cukup  ";
    break;
    case 'D':
        echo " Nilai Anda kurang ";
    break;
    case 'E':
        echo "Nilai anda tidak lulus ";
    break;
    //mengakomodir nilai di luar drai cae yang di sediakan
    default:
        echo "Nilai anda tidak terdaptar ";
    break;

}

?>