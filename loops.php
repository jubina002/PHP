<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
    // for loop
    // for( $i = 0; $i < 10; $i++ ){
    //     echo "This is iteration number " . $i . "<br>";
    // }

    // $test = "5";
    // for( $i = 0; $i < $test; $i++ ){
    //     echo "This is iteration number " . $i . "<br>";
    // }

    // while loop
    // $boolean = true;
    // while ($boolean) {  
    //     echo $boolean;
    //     $boolean = false;
    // }

    // $test = "5";
    // while ($test < 10) {  
    //     echo $test;
    //    $test ++;
       
    // }

    // do while loop
    // $test = "10";
    // do {  
    //     echo $test;
    //    $test ++;
    // }while ($test < 10);

    // for each loop
    // $fruits = array ("Apple", "Banana", "Orange");
    // foreach ($fruits as $fruit) {
    //     echo "This is a ". $fruit. "<br>";

    // }

    // associative array
    $fruits = array ("Apple" => "red", "Banana" => "yellow", "Orange" => "orange");
    foreach ($fruits as $fruit => $color) {
        echo "This is a ". $fruit. ", that has a color of" . $color. "<br>";

    }




    ?>
</body>
</html>