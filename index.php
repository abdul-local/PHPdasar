<?php
$name=strtoupper("malik middin");
$umur=16;
function pesan(){
    echo " Selamat Datang Siwa Codepolitan";
}
pesan();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP dasar</title>
</head>
<body>
<h2>
SELAMAT DATANG,
<?php 
echo $name;
echo "<br>";
echo $umur;
?>

</h2>
    
</body>
</html>