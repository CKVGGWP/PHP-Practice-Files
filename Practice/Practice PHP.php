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
    //Superglobals
    // GLOBALS - used to access global variables from anywhere in the PHP script
    // $_POST - superglobal that is used to collect data and does not show the data
    // $_GET - just like the post superglobal but shows the data 
    // $_SERVER - stores information about the headers, paths, scripts, and locations
    // $_COOKIE - small file that the web server stores in the clients computer // stores username
    // $_SESSION - used to store data in the server rather than the computer / Good to use for sensitive information
    // $_FILES - 2D associated of global array items which are uploaded via the post method / Upload files and save the files

    // EXAMPLE OF GLOBAL

    $x = 100;
    $y = 200;

    function add()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    add();
    echo $z;

    echo "<br>";

    if (isset($_POST)) {
        echo $_POST["name"] . ", your form is submitted";
    }

    // Session Example

    session_start();

    // Storing Information

    $_SESSION["Name"] = "CK";
    $_SESSION["Age"] = 21;

    echo "<br>";
    echo "Hello, " . $_SESSION["Name"];

    session_destroy(); // Close the session

    // Cookie Arguments
    // Name
    // Value
    // Expire => If you do not include this, the cookie will only be stored for the current section
    // Path
    // Domain
    // Security

    // Example of Cookies
    $time = time() + 86400 * 30;
    setcookie("name", "CK", $time);
    echo "<br>";
    print_r($_COOKIE);

    // Example of Files

    // How to upload Files
    // 1. Upload it to the root
    // 2. Directly to the database
    echo "<br>";
    // echo $names = $_FILES['file']['name'] . "<br>";
    // echo $type = $_FILES['file']['type'] . "<br>";
    // echo $tmp_location = $_FILES['file']['tmp_name'] . "<br>";
    // echo $error = $_FILES['file']['error'] . "<br>";
    // echo $size = $_FILES['file']['size'] . "<br>";
    ?>

    <!-- Example of Post Method -->

    <!-- <form action="Practice PHP.php" method="POST">
        <input type="text" name="name">
        <input type="number" name="age">
        <button type="submit">SUBMIT</button>
    </form> -->

    <!-- Example of Get Method -->

    <!-- <form action="upload.php" method="GET">
        <input type="text" name="Name">
        <input type="number" name="Age">
        <button type="submit">SUBMIT</button>
    </form> -->

    <!-- Example of Uploading Files -->
    <!-- enctype="multipart/form-data" - specifies how the form data should be encoded -->
    <br>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <button type="submit">SUBMIT</button>
    </form>
</body>

</html>