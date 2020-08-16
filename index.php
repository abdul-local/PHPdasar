<?php
$siswa=[
    ['nama'=>'abdul','goldarah'=>'B'],
    ['nama'=>'hamzan','goldarah'=>'AB'],
    ['nama'=>'rodi','goldarah'=>'A'],
    ['nama'=>'huswah','goldarah'=>'B+']
];
// menggunakan fungsi serialize untuk mengubah data ke dalam bentuk string
// $data=serialize($siswa);
// cetak data
// echo $data;
// tuli file tesb kedalam file yang sudah di berikan
//  file_put_contents("data.txt",$data);
 // saya baca file yang ada di data.txt
//  $output= file_get_contents("data.txt");
 // cetak output
//  echo $output;
//kemudian saya mau ubah data yang berbentuk serialize ke dalam bentuk array degan fungsi unserialize
// $hasil=unserialize($output);
//cetak hasil berbentuk array menggunakan fungsi print_r
// print_r($hasil);

// mengubah data ke dalam bentuk json
// kita menggunakan printah json_encode
$data= json_encode($siswa);
// // cetak data
// echo $data;
//tulis file ke dalam data.txt
file_put_contents("data.txt",$data);
// baca file yang di tulis dan tampilkan
$output = file_get_contents("data.txt");
//cetak output
// echo $output;
// ubah filenya kedalam bentuk array dengan fugsi json_decode
$hasil= json_decode($output,true);
// cetak hasil
print_r($hasil);




?>