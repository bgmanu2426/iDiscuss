<?php
$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $user_email = $_POST['signupEmail'];
    $user_name = $_POST['signupName'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    // Check whether this email exists
    $existSql = "select * from `users` where user_email = '$user_email'";
    $result = mysqli_query($connection, $existSql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
        $showError = "Email already in use";
    } else {
        if ($pass == $cpass) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_email`, `user_pass`, `username`, `timestamp`) VALUES ( '$user_email', '$hash', '$user_name', current_timestamp())";
            $result = mysqli_query($connection, $sql);
            if ($result) {
                $showAlert = "You can now login using your credentials";
                header("Location: /idiscuss/index.php?signupsuccess=true&signupmssg=$showAlert");
                exit();
            }
        } else {
            $showError = "Passwords do not match";
        }
    }
    header("Location: /idiscuss/index.php?signupsuccess=false&signupmssg=$showError");
}
include '_footer.php';
