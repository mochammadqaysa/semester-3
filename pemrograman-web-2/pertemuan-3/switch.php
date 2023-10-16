<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch statement</title>
</head> 
<body>
    <h3>Demo menggunakan switch dengan ekspresi boolean</h3>
    <?php
        $x = -4;
        $boolExpression = ($x < 0);
        switch ($boolExpression) {
            case true:
                echo "Harga mutlak : -$x";
                break;
            case false:
                echo "Harga mutlak : $x";
                break;
                
            default:
                echo "Harga mutlak : $x";
                break;
        }
    ?>
</body>
</html>