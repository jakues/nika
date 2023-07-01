<?php
include 'connect.php';
session_start();

// case if not admin
if (!isset($_SESSION['uname']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

if (isset($_GET['delID'])) {
    $id = mysqli_real_escape_string($con, $_GET['delID']);

    $sql = "DELETE FROM `beli` WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('Location: admin.php');
    } else {
        die(mysqli_error($con));
    }
}

$con->close();
?>