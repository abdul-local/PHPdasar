<?php
// Array Multidimensi php dasar
// $a = [250,true,["Abdul","Bandung","Golongan darah"]];
// var_dump($a);
// echo "<br>";
// echo $a[2][0];

// $herbivora = ["kambing","sapi","kerbau"];
// $karnivora = ["harimau","singa","serigala"];
// $omnivora = ["ayam","monyet","babi"];

//$binatang = [$herbivora, $karnivora, $omnivora];
// membuat sebuah key
// $binatang=["herbivora"=>$herbivora,"karnivora"=>$karnivora,"omnivora"=>$omnivora];
// echo $binatang ["omnivora"][1];
// echo "<br>";
//menampilkan tulisan sapi
// echo $binatang ["herbivora"][1];

//memberikan key dan nama

// echo $binatang[2][1];
// echo "<br>";
// menampilkan sapi
// echo $binatang[0][1];

$mahasiswa=array(
    array("Marimar",20,"Wanita"),
    array("Soledad",25,"Wanita"),
    array("Alfonso",30,"Pria")
    
); 

// echo $mahasiswa[0][0]. " Memiliki Usia "  .$mahasiswa[0][1]. " jenis kelamin " .$mahasiswa[0][2]."<br>";
// echo $mahasiswa[1][0]. " Memiliki Usia "  .$mahasiswa[1][1]. " jenis kelamin " .$mahasiswa[1][2]."<br>";
// echo $mahasiswa[2][0]. " Memiliki Usia "  .$mahasiswa[2][1]. " jenis kelamin " .$mahasiswa[2][2];
for($baris=0; $baris<3; $baris++){
    echo "<p><b> Baris No: $baris</b></p>";
    echo "<ul>";
    for($kolom=0; $kolom<3; $kolom++){
        echo "<li>".$mahasiswa[$baris][$kolom]."</li>";

    }
    echo "</ul>";
}


?>