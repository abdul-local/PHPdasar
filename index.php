
<?php
if(!empty($_POST['proses'])){

    var_dump($_POST);
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parsing Array</title>
</head>
<body>
    <form action="" method="post">
    Nama: <input type="text" name="nama"><br><br>
    Alamat: <textarea type="text" name="alamat"  col="200" rows="8"></textarea><br><br>
    Program Studi: <select name="program" id="">
    <option  value="TE">Teknik Elektro</option>
    <option value="TI">Teknik Informatika</option>
    <option value="TM">Teknik Mesi</option>
    </select>
    <br><br>
    <input type="submit" name="proses">
    </form>
</body>
</html>