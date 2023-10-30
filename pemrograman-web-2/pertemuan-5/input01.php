<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan Form</title>
</head>
<body>
    <form action="" method="post">
        Nama Anda : <input type="text" name="nama"><br>
        <input type="submit" value="input" name="input">
    </form>
</body>
</html>

<?php
    if (isset($_POST['input'])) {
        $nama = $_POST['nama'];
        echo "Nama Anda : <b>$nama</b>";
    }
?>