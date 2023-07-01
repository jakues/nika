<?php
include 'connect.php';

$id = mysqli_real_escape_string($con, $_POST['id']);
$nama = mysqli_real_escape_string($con, $_POST['product_name']);
$type = mysqli_real_escape_string($con, $_POST['product_type']);
$qty = mysqli_real_escape_string($con, $_POST['quantity']);
$harga = mysqli_real_escape_string($con, $_POST['harga']);
$total = $qty * $harga;

$sql = "UPDATE `beli`
            SET product_name='$nama',
                product_type='$type',
                quantity='$qty',
                harga='$harga',
                total='$total' 
            WHERE id='$id'";
$result = mysqli_query($con, $sql);

if ($result) {
    echo "Updated successfully";
    header("Location: admin.php");
} else {
    die(mysqli_error($con));
}
?>