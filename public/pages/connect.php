<?php

    date_default_timezone_set("Asia/Jakarta");
    $serverName = "localhost";
    $userName = 'root';
    $password = '';
    $db = "nika";

    // create connections
    $con = mysqli_connect($serverName, $userName, $password, $db);

    if (mysqli_connect_errno()) {
        echo "[ERROR] Connections Error !";
        exit();
    }
    //echo "[INFO] Connections sucessfully !";

    // display error
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // function to hash password
    function hashPwd($pwd) {
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        return $hashedPwd;
    }

    // function to auth uname & pwd
    function auth($uname, $pwd) {
        global $con;

        $sql = "SELECT `password` FROM `auth` WHERE username = '$uname'";
        $result = mysqli_query($con, $sql);

        if ($result->num_rows === 1) {
            $row = mysqli_fetch_assoc($result);
            $hashPwd = $row['password'];

            if (password_verify($pwd, $hashPwd)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // function to check username if exist
    function checkUname($uname) {
        global $con;

        $sql = "SELECT id FROM `auth` WHERE username = '$uname'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }
?>