<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    // $fruits = array("Apple", "Banana", "Cherry");

    // array push only works for index array
    // array_push($fruits, "Mango");
    // print_r($fruits);
    // $fruits = ["Apple", "Banana", "Cherry"];
    // $test = ["mango", "watermelon", "strawberry"];
    // array_splice($fruits, 2, 0, $test); 

    // $fruits[] = "Mango";
    // $fruits[1] = "Mango";

    // unset($fruits[1]);

   // start at index 0
    // array_splice($fruits, 0, 1);  

    // array_splice($fruits, 2, 0, $test); 
    // print_r($fruits);
    
    // echo $fruits[1];

    // multidimensional array
    //  $food = [
    //         array("apple", "mango"), 
    //         "Banana", 
    //         "Cherry"];

            $food = [
            "fruits" => array("apple", "mango"), 
            "meat" => array("chicken", "fish")
           ];

    echo $food["meat"][0];


    // associative array

    // $tasks = [
    //     "laundry" => "Daniel",
    //     "trash" => "Bella",
    //     "vacuum" => "Danny",
    //     "dishes" => "Jems",
    // ];
    // $tasks["dusting"] = "Tara";

    // sort($tasks); 
    // echo $tasks["laundry"];
    // echo count($tasks);
    // print_r($tasks);
    ?>
</body>
</html>