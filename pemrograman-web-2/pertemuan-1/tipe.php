<?php

    $nim = "9882405222111004";
    $nama = "Mochammad Qaysa Al-Haq";
    $umur = 20;
    $nilai = 90.23;
    $status = true;
    
    echo "NIM &nbsp;&nbsp;&nbsp; : $nim <br>";
    echo "NAMA &nbsp;&nbsp;&nbsp; : $nama <br>";
    print "Umur &nbsp;&nbsp;&nbsp;: $umur";
    print "<br>";
    printf("Nilai &nbsp;&nbsp;&nbsp; : %.3f<br>",$nilai);
    if ($status) {
        echo "Status &nbsp;&nbsp;&nbsp; : Aktif";
    }else {
        echo "Status &nbsp;&nbsp;&nbsp; : Tidak Aktif";
    }
?>