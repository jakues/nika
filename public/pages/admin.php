<?php
include 'connect.php';
session_start();

// case if not admin
if (!isset($_SESSION['uname']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/modal.css">
    <title>Admin Page</title>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar">
        <div class="logo">
            <a href="../../index.php">NIKA</a>
        </div>
        <div class="navbar-extra">
            <a href="login.php" id="user" class="form-open">
                <i class="fa-solid fa-user"></i>
            </a>
            <span id="username" style="margin-left: 1rem;">
                <?php
                echo isset($_SESSION['uname']) ? $_SESSION['uname'] : '';
                ?>
            </span>
            <span>
                <?php
                if (isset($_SESSION['login-msg'])) {
                    ?>
                    <a href='logout.php' style="text-decoration: none;">Logout</a>
                    <?php
                }
                ?>
            </span>
            <a href="javascript:void(0);" id="bars">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- section start -->
    <div class="container">
        <button class="btn-buy mt-8" id="add-btn">Beli</button>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Tanggal Beli</th>
                    <th>Tipe</th>
                    <th>Kuantitas</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM `beli`";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $produk = $row['product_name'];
                $tanggal = $row['tanggal'];
                $type = $row['product_type'];
                $qty = $row['quantity'];
                $harga = $row['harga'];
                $total = $row['total'];
                ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $id; ?>
                        </td>
                        <td>
                            <?php echo $produk; ?>
                        </td>
                        <td>
                            <?php echo $tanggal; ?>
                        </td>
                        <td>
                            <?php echo $type; ?>
                        </td>
                        <td>
                            <?php echo $qty; ?>
                        </td>
                        <td>
                            <?php echo $harga; ?>
                        </td>
                        <td>
                            <?php echo $total; ?>
                        </td>
                        <td>
                            <button id="update-btn" class="btn-update">Update</button>
                        </td>
                        <td>
                            <a href="delete.php?delID=<?php echo $id; ?>" class="btn-del">Delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
    <!-- section end -->

    <!-- modal add product start -->
    <div id="add-modal" class="modal">
        <div class="modal-content">
            <span class="close" id="close-add">&times;</span>
            <h3>Add Product</h3>
            <form id="productForm" action="beli.php" method="post">
                <label for="product_name">Nama : </label>
                <input type="text" name="product_name" id="product_name" placeholder="e.g. Nasi Goreng Ayam" required>

                <label for="product_type">Tipe : </label>
                <select name="product_type" id="product_type" required>
                    <option value="" disabled>Select Type</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                </select>

                <label for="harga">Harga : </label>
                <input type="number" name="harga" id="harga" placeholder="e.g. 10000 (in IDR)" required>

                <label for="quantity">Jumlah : </label>
                <input type="number" name="quantity" id="quantity" placeholder="e.g. 2" oninput="calculateTotal()" required>

                <label for="total">Total : </label>
                <input type="number" name="total" id="total" value="" disabled><br><br>

                <input type="submit" value="Add Product" name="submit">
            </form>
        </div>
    </div>
    <!-- modal add product end -->

    <!-- modal update start -->
    <div id="update-modal" class="modal">
        <div class="modal-content">
            <span class="close" id="close-update">&times;</span>
            <h3>Update Data</h3>
            <form id="productForm" action="update.php" method="post">
            <input type="text" name="id" id="id" value="<?php echo $id; ?>" hidden>

                <label for="product_name">Nama : </label>
                <input type="text" name="product_name" id="product_name" value="<?php echo $produk; ?>" required>

                <label for="product_type">Tipe : </label>
                <select name="product_type" id="product_type" value="<?php echo $type; ?>" required>
                    <option value="" disabled>Select Type</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                </select>

                <label for="harga">Harga : </label>
                <input type="number" name="harga" id="harga-update" value="<?php echo $harga; ?>" required>

                <label for="quantity">Jumlah : </label>
                <input type="number" name="quantity" id="quantity-update" oninput="calculateTotalUp()" value="<?php echo $qty; ?>" required>

                <label for="total">Total : </label>
                <input type="number" name="total" id="total-update" value="" disabled><br><br>

                <input type="submit" value="Save Changes" name="submit">
            </form>
        </div>
    </div>
    <!-- modal update end -->

    <script src="../js/script.js"></script>
</body>

</html>