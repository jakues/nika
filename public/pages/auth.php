<?php
session_start();
include 'connect.php';

if (isset($_POST['submit-btn'])) {
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $pwd = mysqli_real_escape_string($con, $_POST['pass']);

    // $sql = "SELECT * FROM `auth` WHERE username = '$uname' AND password = '$pwd'";
    // $result = mysqli_query($con, $sql);

    if (auth($uname, $pwd)) {
        $_SESSION['login-msg'] = 'Login successfull';
        $_SESSION['uname'] = $uname;
        if ($uname == 'admin') {
            $_SESSION['role'] = 'admin';
            header("Location: admin.php");
        } else {
            $_SESSION['role'] = 'user';
            header("Location: ../../index.php");
        }
    } else {
        $_SESSION['login-msg'] = 'Incorrect username or password';
        header("Location: login.php");
    }
}

$con->close();
?>