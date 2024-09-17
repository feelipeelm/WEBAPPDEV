<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <?php
    $operand1=8;
    $operand2=2;
    $operation = "-";
    
    switch ($operation) {
        case ("+"):
            echo "The result is " .($operand1 + $operand2);       
            break;
        case ("-"):
            echo "The result is " .($operand1 - $operand2);       
            break;
        case ("*"):
            echo "The result is " .($operand1 * $operand2);       
            break;
        case ("/"):
            echo "The result is " .($operand1 / $operand2);       
            break;
        default:
            echo "Incorrect operation";
        }     
    
    ?>
</body>
</html>