<?php
    $bilangan = $_POST['angka'];
    if ($bilangan % 2 == 0) {
        echo "$bilangan adalah bilangan GENAP <br>";
    }else {
        echo "$bilangan adalah bilangan GANJIL <br>";
    }
?>