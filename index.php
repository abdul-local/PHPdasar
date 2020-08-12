
<?php
    $nama ="M ABDULLOH HAMZAN";
    $alamat="Lombok";
    $gol_darah="B";
    $name ="<h2>Siswa Codepolitan</h2>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Selamat Datang, <?php echo $nama ?></h1>
<h2>Alamat: <?php echo $alamat ?></h2>
<h2>Golongan Darah: <?php echo $gol_darah ?></h2>

<p>ini adalah paragraf pertama saya di dokumen HTML yang berisi kode PHP.</p>
<?php
echo $nama;
echo "<br>";
echo $alamat;
echo "<br>";
echo $gol_darah;
echo "<br>";
echo $name;
echo "<br>";
echo $alamat;
?>
</body>
</html>