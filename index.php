<?php
// continue php dasar
$siswa = [
    ['nama'=> 'toni','kelas'=>'2A','goldarah'=>'B'],
    ['nama'=> 'kresna','kelas'=>'2A','goldarah'=>'AB'],
    ['nama'=> 'Palupi','kelas'=>'2B','goldarah'=>'B'],
    ['nama'=> 'Singgih','kelas'=>'2C','goldarah'=>'A'],
    ['nama'=> 'Oriza','kelas'=>'2B','goldarah'=>'O'],
    ['nama'=> 'hani','kelas'=>'2D','goldarah'=>'B']
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan data ke HTML</title>
</head>
<body>
    <table border="1">
    <tr>
    <th>Nama</th>
    <th>kelas</th>
    <th>goldarah</th>
    </tr>
    <?php
    foreach($siswa as $key=>$nilai): ?>
        <tr>
        <td><?php echo $nilai['nama']; ?></td>
        <td><?php echo $nilai['kelas']; ?></td>
        <td><?php echo $nilai['goldarah']; ?></td>
        </tr>

    <?php endforeach;?>
    </table>
</body>
</html>