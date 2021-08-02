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

    if (isset($_POST['submit'])) {
        // Create a file
        $myFile = fopen("uploads/file.txt", "a");

        echo $myFile;

        // Put a text inside a file

        $txt = "Hello! My age is " . $_POST['age'] . "\n";

        fwrite($myFile, $txt);

        // Close the Function

        fclose($myFile);
    }
    ?>

    <form action="fileput.php" method="POST">
        <input type="text" name="age">
        <input type="submit" name="submit">
    </form>
</body>

</html>