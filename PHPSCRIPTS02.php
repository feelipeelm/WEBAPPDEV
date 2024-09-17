<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $meals =[
        "Monday" => "Tacos",
        "Tuesday" => "Pasta",
        "Wednesday" => "Salad",
        "Thursday" => "Rice",
        "Friday" => "Steak",
        "Saturday" => "Tuna",
        "Sunday" => "Pizza",
    ];

   
   
    $week="Monday";
    switch ($week) {
        case ("Monday"):
            echo "Today we are going to eat " . $meals['Monday'];       
            break;
        case ("Tuesday"):
            echo "Today we are going to eat " . $meals['Tuesday'];       
            break;
        case ("Wednsday"):
            echo "Today we are going to eat " . $meals['Wednesday'];       
            break;
        case ("Thursday"):
            echo "Today we are going to eat " . $meals['Thursday'];       
            break;
        case ("Friday"):
            echo "Today we are going to eat " . $meals['Friday'];       
            break;
        case ("Saturday"):
            echo "Today we are going to eat " . $meals['Saturday'];       
            break;
        case ("Sunday"):
            echo "Today we are going to eat " . $meals['Sunday'];       
            break;
        default:
            echo "No menu";
        }     
    ?>
</body>
</html>