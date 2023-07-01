<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Warung - NIKA</title>
    <link rel="stylesheet" href="public/css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap" rel="stylesheet" />
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <a href="#">NIKA</a>
        </div>
        <div class="link">
            <a href="#makanan">Makanan</a>
            <a href="#minuman">Minuman</a>
            <a href="#about">Tentang Kami</a>
        </div>
        <div class="navbar-extra">
            <?php
                if (isset($_SESSION['uname']) === 'admin' && $_SESSION['role'] === 'admin') {
                    echo '<a href="public/pages/admin.php" id="user" class="form-open">';
                } else {
                    echo '<a href="public/pages/login.php" id="user" class="form-open">';
                }
            ?>
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
                        <a href='public/pages/logout.php' style="text-decoration: none;">Logout</a>
                    <?php
                        }
                    ?>
                </span>
            <a href="javascript:void(0);" id="bars">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
    </nav>
</body>

</html>