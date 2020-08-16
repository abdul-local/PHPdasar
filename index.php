<?php
// kita mengguanakan fungsi isset() untuk memeriksa suatu object dari inputan form
$todos=[];
// saya mau baca file yang sy tulis di post itu
if(file_exists('todo.txt')){
    $file = file_get_contents('todo.txt');
    $todos= unserialize($file);
}



if(isset($_POST['todo'])){
    $data=$_POST['todo'];
    $todos[]=[
        'todo'=>$data,
        'status'=> 0
    ];
    file_put_contents('todo.txt',serialize($todos));
}

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
<input type="checkbox" name="todo">
<label for=""><?php echo $nilai['todo'] ?></label>
<a href="#">hapus</a>
</li>
<?php endforeach; ?>
</ul>