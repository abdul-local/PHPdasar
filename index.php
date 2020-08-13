<?php
// Tipe data Null
// null merepresentasikan tidak ada tipe data atau kosong
$pesan=null;
$datadiri = [
    'nama' => 'abdul',
    "alamat" => "Lombok",
    "hobi" => "programing"
];
// mencetak variabel data diri dengan index nama

//echo $datadiri['nama']."<br>";
//mencba panggil dengan index goldarah yg tidak ada di array data diri
//echo $datadiri['goldarah'];
// echo $pesan;
//mencoba menampilkan data yag tidak ada nilainya 
echo $datadiri['malik'] ?? null;



?>