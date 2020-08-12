<?php
// Array pada php dasar
// inittialiasi untuk tipe data Array
// $a = array("sapi","ayam","kambing");
// echo $a[0];
// echo "<br>";
// echo $a[1];
// echo "<br>";
// echo $a[2];
// echo "<br>";
// var_dump($a);

// bisa juga mengganti tulisaan array degan kurung siku
$a =["sapi","ayam","kambing"];
//menambahkan variabel baru
$a[]="kucing";
//menambahakan array dengan langsung idex ke 99
// misalnya kita mau mengganti index ke nol dengan kerbau
$a[0]="kerbau";
$a[99]="anjing";
echo $a[0];
echo "<br>";
echo $a[1];
echo "<br>";
echo $a[2];
echo "<br>";
echo $a[99];
echo "<br>";
// mencoba untuk menampilkan nilai yang tidak ada indexnya
//echo $a[10]; // pasti mucul error
// untuk memperbaikinya kita menggunakan tanda ?? kalau tidak ada bisa di lanjutkan lagi ke array selanjutnya
echo $a[10] ?? ' ';
var_dump($a);



?>