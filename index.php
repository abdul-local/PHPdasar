<?php
$message="hellow nama saya muhammad abdulloh hamza, saya seorang member regular di codepolitan ";
// fungsi file_put_contents untuk meulis data dalam bentuk file txt
file_put_contents("content.txt", $message);
// fungsi file_get_contents untuk membaca atay menampilkan hasil tulisan yang sebelumnya ke dalam file php
$pesan=file_get_contents("content.txt");
echo $pesan;

?>