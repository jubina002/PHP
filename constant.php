<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>
<body>
    <?php

// capitalize the constant
    define("PI","3.14");
    // define("PI","4.14");
    define("NAME","Jubina");
    define("IS_ADMIN","true");
    echo IS_ADMIN;

    function test(){
        echo PI;
    }

    test();
    ?>
</body>
</html>