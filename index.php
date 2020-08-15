<?php
// continue php dasar
$siswa = [
    ['nama'=> 'toni','kelas'=>'2A'],
    ['nama'=> 'kresna','kelas'=>'2A'],
    ['nama'=> 'Palupi','kelas'=>'2B'],
    ['nama'=> 'Singgih','kelas'=>'2C'],
    ['nama'=> 'Oriza','kelas'=>'2B'],
    ['nama'=> 'hani','kelas'=>'2D']
];
foreach($siswa as $key => $nilai){
    //cara pertama
    // if($nilai['kelas'] !== '2A')
    // {
    // echo "Nama : ".$nilai['nama']."<br>";
    // echo "Kelas :" .$nilai['kelas']."<br>";

    // }

    // dengan menggunakan perintah continue untuk melanjutkan ekskusi setelahnya.
    if($nilai['kelas'] =='2A'){
        continue;
    }
    echo "Nama: ".$nilai['nama']."<br>";
    echo "Kelas: " .$nilai['kelas']."<br>";


    
}

?>