<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NIKA - Login</title>
  <link rel="stylesheet" href="../css/login.css" />
  <!-- <link rel="stylesheet" href="../css/style.css" /> -->
  <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="logo">NIKA</div>
  <h1>Login</h1>
  <!-- Form section start -->
  <div class="menu-row">
    <a href="../../index.php" id="index">
      <i class="fa-solid fa-arrow-left"></i>
    </a>
    <a href="signup.php" id="signup">
      <span>Create Account </span>
      <i class="fa-solid fa-user-plus"></i>
    </a>
  </div>
  <div class="container">
    <form method="post" action="auth.php">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required />

      <label for="pwd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required />

      <button type="submit" class="signin" name="submit-btn">Sign in</button>
    </form>
    <!-- Form section end -->
  </div>
  <div class="container">
    <?php
    session_start();

    if (isset($_SESSION['login-msg'])) {
      $loginMsg = $_SESSION['login-msg'];
      unset($_SESSION['login-msg']);
    } else {
      $loginMsg = "";
    }

    echo $loginMsg;
    ?>
  </div>
  <!-- Footer start -->
  <?php include 'footer.php' ?>
  <!-- Footer end -->
  <script src="https://kit.fontawesome.com/8c1bad6c0c.js" crossorigin="anonymous"></script>
</body>

</html>