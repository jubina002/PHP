<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes</title>
</head>
<body>
    <?php

//     $test = "Jubina";
//    function myFunction(){
//     $localVar = "Hello World?";
//     return $GLOBALS["test"];
//    }

//    echo myFunction();

// $test = "Jubina";

// function myFunction(){
//     static $staticvAR = 0;
//     $staticvAR++;
//     return $staticvAR;
// }

// echo myFunction();
// echo myFunction();

class  MyClass{

    // Define a class variable
    public $classVar = "Hello World";

    // define a class method
public function myMethod(){
    echo $this ->classVar; // Output: Hello World
}
}
    ?>
</body>
</html>