<?php

if (isset($_POST['submit'])) {
    echo $file = $_FILES['file'];
    echo $name = $_FILES['file']['name'];
    echo $tmp_name = $_FILES['file']['tmp_name'];
    echo $error = $_FILES['file']['error'];
    echo $size = $_FILES['file']['size'];

    // Explode from punctuation mark
    $tempExtension = explode('.', $name);

    $fileExtension = strtolower(end($tempExtension));

    // Allowed Extensions
    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileExtension, $isAllowed)) {
        if ($error === 0) {
            if ($size < 30000) {
                $newFileName = uniqid('', true) . "." . $fileExtension;
                $fileDestination = "uploads/" . $fileExtension;
                move_uploaded_file($tmp_location, $fileDestination);
                header("Location: Practice PHP.php?uploadedSuccess");
            } else {
                echo "Your File Size is too Big!";
            }
        } else {
            echo "There was an error! Try again later!";
        }
    } else {
        echo "Your File Type is not accepted!";
    }
}
