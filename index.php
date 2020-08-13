<?php
$nama = $_GET['nama'];
$alamat=$_GET['alamat'];
//var_dump($_GET);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query String GET</title>
</head>
<body>
<form action="">
Nama:<input type="text" name="nama"><br>
Alamat: <input type="text" name="alamat"><br>
<input type="submit">
</form>
<h1>Selamat Datang,<?php echo $nama; ?></h1>
<h2>Anda tinggal di <?php echo $alamat; ?></h2>
<p>selamat belajar pemerograman PHP dasar</p>
    
</body>
</html>