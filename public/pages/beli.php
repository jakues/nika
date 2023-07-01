<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($con, $_POST['product_name']);
    $type = mysqli_real_escape_string($con, $_POST['product_type']);
    $qty = mysqli_real_escape_string($con, $_POST['quantity']);
    $harga = mysqli_real_escape_string($con, $_POST['harga']);
    $total = $qty * $harga;

    $sql = "INSERT INTO `beli` (id,product_name,product_type,quantity,harga,total)
        VALUES (NULL,'$nama','$type','$qty','$harga','$total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location: admin.php");
    }
}
?>