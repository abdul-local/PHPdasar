<?php
// Array Asosiatif php dasar
//cara pertama penulisan array
// $a=["sapi","kerbau","kambing","domba"];
//cara kedua penulisan array
// $a[0]="sapi";
// $a[1]="kambing";
// $a[2]="domba";
// var_dump($a);
// echo "<br>";
//dengan cara 1
// $datadiri[] = "Abdul Hamzan";
// $datadiri[] = "B";
// $datadiri[] = "Bandung";
// echo "<br>";
// echo "Nama : ".$datadiri[0];
// echo "<br>";
// echo "Golongan darah : ".$datadiri[1];
// echo "<br>";
// echo "Alamat:".$datadiri[2];
//dengan cara 2 yang du sebut dengan asosiatif array
// $datadiri["nama"] ="Abdul Hamzan";
// $datadiri["gol"] ="B";
// $datadiri["Alamat"]="Bandung";
// ==> khusus untuk mengarah ke nilai yang di inginkan

$datadiri = [

    "Nama"=>"Muhammad Abdulloh Hamzan",
    "Golongan darah"=>"B",
    "Alamat"=>"Bandung"
];

// echo "Nama:".$datadiri['nama'];
// echo "<br>";
// echo "Alamat:".$datadiri['Alamat'];
// echo "<br>";
// echo "Golongan darah:".$datadiri['gol'];

echo $datadiri; 



// var_dump($datadiri);



// echo $a[0];

?>