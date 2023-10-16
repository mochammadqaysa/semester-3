<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch 2</title>
</head>
<body>
    <h3>Demo menggunakan switch dengan ekspresi string</h3>

    <?php 
        $pilihan = "empat";
        switch ($pilihan) {
            case 'satu':
                echo "Pilihan ke-1";
                break;
            case 'dua':
                echo "Pilihan ke-2";
                break;
                break;
            case 'tiga':
                echo "Pilihan ke-3";
                break;
                break;
            case 'empat':
                echo "Pilihan ke-4";
                break;
                break;
            case 'lima':
                echo "Pilihan ke-5";
                break;
            
            default:
                echo "Pilihan default";
                break;
        }
    ?>
</body>
</html>