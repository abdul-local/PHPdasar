<?php
    // $kalimat = " saya suka pizza, terutama pizza yang dagingnya tebal ";
    //menggunakan fungsi str_word_count
    // str_word_count berfungsi untuk menghitung jumlah kalimat
    // echo str_word_count($kalimat);
    //fungsi str_replace berfungsi untuk mengganti kata 
    // echo str_replace('pizza','burger',$kalimat);

    //membuat fungsi sendiri 
    // function cetakpesan($nama = null){
    //     global $nama;
    //     if(empty($nama)){
    //         echo "Selamat datang di codepolitan ";
    //     }else{
    //         echo "Selamat datang di codepolitan, $nama";
    //     }
        
    // }
    // $nama="Abdul Hamzan";
    // cetakpesan($nama);

    // $nama='abdul';
    // function cetakpesan($nama){
    //     echo " Nama $nama , selamat datang di codepolitan";
    // }
    // cetakpesan($nama);
     // bisa menggunakan dengan mendeklarasikan variael global di dalam fungsi

     // variabel global dan isinya
     $nama ="malik";
     function tulispesan(){
         global $nama;
         echo "Selamat datamg $nama di codepolitan";
     }
     tulispesan();

    

?>