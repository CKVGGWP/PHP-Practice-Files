<?php

if (isset($_POST['submit'])) {
    require 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: ../login.php?error=emptyFields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlError");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $results = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($results)) {
                $passCheck = password_verify($password, $row['password']);
                if ($passCheck == false) {
                    header("Location: ../login.php?error=wrongPassword");
                    exit();
                } else if ($passCheck == true) {
                    session_start();
                    $_SESSION['session_id'] = $row['id'];
                    $_SESSION['session_User'] = $row['username'];
                    header("Location: ../index.php?success=LoginSuccess");
                    exit();
                } else {
                    header("Location: ../login.php?error=wrongPassword");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=userNotFound");
                exit();
            }
        }
    }
} else {
    header("Location: ../index.php?error=accessForbidden");
    exit();
}
