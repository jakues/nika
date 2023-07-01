<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NIKA - Sign Up</title>
  <link rel="stylesheet" href="../css/login.css" />
  <!-- <link rel="stylesheet" href="../css/style.css" /> -->
  <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="logo">NIKA</div>
  <h1>Register</h1>
  <!-- Form section start -->
  <div class="menu-row">
    <a href="../../index.php" id="index">
      <i class="fa-solid fa-arrow-left"></i>
    </a>
    <a href="login.php" id="signup">
      <span>Sign in </span>
      <i class="fa-solid fa-right-to-bracket"></i>
    </a>
  </div>
  <div class="container">
    <form method="post">
      <!-- Username -->
      <label for="uname" class="label-form">Username</label>
      <input type="text" placeholder="Enter Username" name="uname" required />
      <!-- Email -->
      <label for="email" class="label-form">Email</label>
      <input type="email" placeholder="Enter Email" name="email" required />
      <!-- Password -->
      <label for="pwd" class="label-form">Password</label>
      <input type="password" placeholder="Enter Password" required />
      <label for="pwd-confirm" class="label-form">Password Match</label>
      <input type="password" placeholder="Enter Password" name="pass" required />

      <button type="submit" class="signin" name="signup-btn">Sign up</button>
    </form>
    <!-- Form section end -->
    <?php
    if (isset($_POST['signup-btn'])) {
      $username = mysqli_real_escape_string($con, $_POST['uname']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $password = mysqli_escape_string($con, $_POST['pass']);

      // check username
      if (checkUname($username)) {
        echo "<script>alert('Username already exist')</script>";
      } else {

        $hashedPassword = hashPwd($password);

        $sql = "INSERT INTO `auth` (id,username,password,email) VALUES (NULL,'$username','$hashedPassword','$email')";
        $result = mysqli_query($con, $sql);

        if ($result) {
          echo "<p>Sign Up berhasil !</p>";
        } else {
          echo "<p>Sign Up gagal !</p>";
        }
      }
    }
    $con->close();
    ?>
  </div>
  <!-- Footer start -->
  <?php include 'footer.php' ?>
  <!-- Footer end -->
  <script src="https://kit.fontawesome.com/8c1bad6c0c.js" crossorigin="anonymous"></script>
</body>

</html>