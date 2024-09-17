<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=20;
    $total=0;

    for ($i = 0; $i <= $num; $i++) {
        $total = $total + $i;
    }
    echo"El total es: $total";
        
    ?>
</body>
</html>