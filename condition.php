<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures</title>
</head>
<body>
    <?php

    $bool = true;
    $a = 1;
    $b = 4;

    $result = match ($a){
        1 => "Variable a is equal to one",
        2 => "Variable a is equal to two",
        default => "None were a match"
    };
    
    echo $result;

// switch($a){
//     case 1: //if $a=1
//         echo "The first case is correct !";
//         break;

//     case 3: //if $a=3
//         echo "The second case is correct !";
//         break;
//     default:
//         echo "None of the case were true";
// } 

    // if($a < $b && !$bool){
    //     echo "First condition is true";
    // }else if($a < $b && $bool){
    //     echo "Second condition is true";
    // }else{
    //     echo "None of the condition were true";
    // }

    ?>

</body>
</html>