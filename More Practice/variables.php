<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // is_string() - checks the datatypes

    $name = "CK";

    echo is_string($name) . "<br>";

    $name = 21;

    var_dump(is_string($name));

    isset($name); // checks if the variable is declared

    define("PI", 3.14); // defining a constant

    echo PI . "<br>";

    defined("PI"); // to check if the constant is defined

    // Conversion

    $strNumber = "3.2";

    $number = (float)$strNumber;

    var_dump($number) . "<br>";

    ?>
</body>

</html>