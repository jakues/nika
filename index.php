<?php
include 'public/pages/connect.php';
session_start();
?>
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
  <!-- Navbar start -->
  <?php include 'public/pages/navbar.php' ?>
  <!-- Navbar end -->

  <!-- Hero start -->
  <section class="hero">
    <main class="content">
      <h1>Waroeng <span>NIKA</span></h1>
      <p>
        Waroeng NIKA, Delicious F&B same as your mama serve</p>
      <a href="#" class="btn-buy">Beli Sekarang!</a>
    </main>
  </section>
  <!-- Hero end -->

  <!-- List menu makanan start -->
  <section id="makanan" class="menu">
    <h2><span>Menu</span> Makanan</h2>
    <p>
      Kami menyediakan berbagai pilihan makanan lezat di Warung NIKA.
      Dengan rasa yang sama nikmatnya dengan masakan ibu anda.
    </p>

    <div class="row">
      <!-- Daftar Makanan start -->
      <div class="menu-cards">
        <img src="public/assets/makanan/ayam.jpg" alt="ayam" class="menu-cards-img" />
        <h3 class="menu-cards-title">Ayam Goreng</h3>
        <p class="menu-cards-price"><span>IDR</span> 12,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/makanan/burger.jpg" alt="burger" class="menu-cards-img" />
        <h3 class="menu-cards-title">Beef Burger</h3>
        <p class="menu-cards-price"><span>IDR</span> 25,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/makanan/cupcake.jpg" alt="cupcake" class="menu-cards-img" />
        <h3 class="menu-cards-title">Cupcake</h3>
        <p class="menu-cards-price"><span>IDR</span> 5,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/makanan/fried-rice.jpg" alt="fried-rice" class="menu-cards-img" />
        <h3 class="menu-cards-title">Nasi Goreng</h3>
        <p class="menu-cards-price"><span>IDR</span> 12,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/makanan/kentang.jpg" alt="kentang" class="menu-cards-img" />
        <h3 class="menu-cards-title">Stik Kentang</h3>
        <p class="menu-cards-price"><span>IDR</span> 8,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/makanan/mie-goreng.jpg" alt="mie-goreng" class="menu-cards-img" />
        <h3 class="menu-cards-title">Mie Goreng</h3>
        <p class="menu-cards-price"><span>IDR</span> 15,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/makanan/pizza.jpg" alt="pizza" class="menu-cards-img" />
        <h3 class="menu-cards-title">Pizza</h3>
        <p class="menu-cards-price"><span>IDR</span> 35,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/makanan/rice.jpg" alt="rice" class="menu-cards-img" />
        <h3 class="menu-cards-title">Nasi Putih</h3>
        <p class="menu-cards-price"><span>IDR</span> 5,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <!-- Daftar Makanan end -->
    </div>
  </section>
  <!-- List menu makanan end -->

  <!-- List menu minuman start -->
  <section id="minuman" class="menu">
    <h2><span>Menu</span> Minuman</h2>
    <p>
      Kami menyediakan berbagai pilihan minuman segar dan istimewa di Warung NIKA,
    </p>
    <div class="row">
      <!-- Daftar minuman start -->
      <div class="menu-cards">
        <img src="public/assets/minuman/boba.jpg" alt="boba" class="menu-cards-img" />
        <h3 class="menu-cards-title">Boba</h3>
        <p class="menu-cards-price"><span>IDR</span> 12,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/minuman/coffee-milk.jpg" alt="coffee-milk" class="menu-cards-img" />
        <h3 class="menu-cards-title">Coffee Milk</h3>
        <p class="menu-cards-price"><span>IDR</span> 6,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/minuman/coffee.jpg" alt="coffee" class="menu-cards-img" />
        <h3 class="menu-cards-title">Coffee</h3>
        <p class="menu-cards-price"><span>IDR</span> 3,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/minuman/hot-tea.jpg" alt="hot-tea" class="menu-cards-img" />
        <h3 class="menu-cards-title">Hot Tea</h3>
        <p class="menu-cards-price"><span>IDR</span> 3,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/minuman/iced-coffee.jpg" alt="iced-coffee" class="menu-cards-img" />
        <h3 class="menu-cards-title">Iced Coffee</h3>
        <p class="menu-cards-price"><span>IDR</span> 4,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/minuman/iced-tea.jpg" alt="iced-tea" class="menu-cards-img" />
        <h3 class="menu-cards-title">Iced Tea</h3>
        <p class="menu-cards-price"><span>IDR</span> 3,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/minuman/lemon-tea.jpg" alt="lemon-tea" class="menu-cards-img" />
        <h3 class="menu-cards-title">Lemon Tea</h3>
        <p class="menu-cards-price"><span>IDR</span> 7,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>

      <div class="menu-cards">
        <img src="public/assets/minuman/mineral.jpg" alt="mineral" class="menu-cards-img" />
        <h3 class="menu-cards-title">Air Mineral</h3>
        <p class="menu-cards-price"><span>IDR</span> 3,000</p>
        <div class="block-qty">
          <input type="text" class="menu-qty" name="quantity" min="1" value="1" />
          <button class="btn_qty btn-up"></button>
          <button class="btn_qty btn-down"></button>
          <button class="btn-cart">Beli</button>
        </div>
      </div>
      <!-- Daftar minuman end -->
    </div>
  </section>
  <!-- List menu minuman end -->

  <!-- About start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>
    <div class="row">
      <div class="about-img">
        <img src="public/assets/about.jpg" alt="about-img" />
      </div>
      <div class="content">
        <h3>Our Journey</h3>
        <p>
          Kami bangga memberikan pengalaman kuliner yang istimewa kepada
          pelanggan sejak tahun 1995. Dengan dedikasi kami selama bertahun-tahun, Warung
          NIKA telah menjadi warung makan yang terpercaya dan memiliki reputasi yang solid.
          Selain itu, kami juga memiliki label halal yang menjamin bahwa setiap hidangan kami d
          isajikan sesuai dengan prinsip-prinsip kehalalan. Dengan kualitas makanan yang terjaga
          dan pelayanan yang ramah, kami mengundang Anda untuk menikmati kuliner lezat di Warung
          NIKA yang sudah teruji dan terbukti sejak puluhan tahun yang lalu.
        </p>
      </div>
    </div>
  </section>
  <!-- About end -->

  <!-- Footer start -->
  <footer>
    <div class="social">
      <a href="#">
        <i class="fa-brands fa-instagram"></i>
      </a>
      <a href="#">
        <i class="fa-brands fa-whatsapp"></i>
      </a>
      <a href="#">
        <i class="fa-brands fa-facebook"></i>
      </a>
    </div>

    <div class="links">
      <a href="#hero">Home</a>
      <a href="#makanan">Makanan</a>
      <a href="#minuman">Minuman</a>
      <a href="#about">About</a>
    </div>

    <div class="credits">
      <p>2023 &copy <a href="https://github.com/jakues/nika">NIKA</a></p>
    </div>
  </footer>
  <!-- Footer end -->

  <script src="https://kit.fontawesome.com/8c1bad6c0c.js" crossorigin="anonymous"></script>
  <script src="public/js/script.js"></script>
</body>

</html>