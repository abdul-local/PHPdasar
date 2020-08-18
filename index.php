<?php

$todos=[];
// funtion file_exist berfungsi untuk mengcek file apakah sudah ada atau belum
if(file_exists('todo.txt')){
    // saya mau baca file yang sy tulis di post itu
    $file = file_get_contents('todo.txt');
    $todos= unserialize($file);
}


// kita mengguanakan fungsi isset() untuk memeriksa suatu object dari inputan form
if(isset($_POST['todo'])){
    $data=$_POST['todo'];
    $todos[]=[
        'todo'=>$data,
        'status'=> 0
    ];
    file_put_contents('todo.txt',serialize($todos));
    // redirect ke halaman denga fugsi header
    header('location:index.php');
}
if(isset($_GET['status'])){
    $todos[$_GET['key']]['status'] = $_GET['status'];
    file_put_contents('todo.txt',serialize($todos));
    //sy redirect dengan fungsi heder biar ndk berulang
    header('location:index.php');
}

print_r($todos);

?>


<h2>Todo App</h2>
<form action="" method="POST">
<label for="">Daptar Belanja Hari ini</label><br>
<input type="text" name='todo'>
<button type"submit"> simpan</button>
</form>
<ul>
<?php
foreach($todos as $key=>$nilai): ?>
<li>
<input type="checkbox" name="todo" onclick="window.location.href='index.php?status=<?php if($nilai['status']== 1) echo 0; else echo 1; ?>&key=<?php echo $key; ?>' " <?php if($nilai['status'] == 1) echo 'checked'; ?>> 
<label ><?php
    if($nilai['status'] == 1){
        echo "<del>".$nilai['todo']."</del>";
    }else

    echo $nilai['todo'];


?></label>
<a href="#">hapus</a>
</li>
<?php endforeach; ?>
</ul>