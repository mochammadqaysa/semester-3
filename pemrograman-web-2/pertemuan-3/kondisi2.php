<?php
    $angka = $_POST['angka'];

    $ganjil = ($angka % 2) == 1;
    if (!$ganjil || ($angka < 1 || $angka > 20)) {
        echo "Anda memasukan bilangan genap $angka <br>";
        echo "ERROR : Bilangan harus dalam rentang 1 sampai 20 dan ganjil";
        exit();
    } 
    echo "Bilangan yang anda masukan adalah $angka"
?>