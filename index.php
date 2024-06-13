<?php
session_start();

if (isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header("Location: 3.login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eka Snack</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- css -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Eka<span>Snack</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu-kami">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Selamat Datang, <span><?= $_SESSION['username'] ?></span></h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat,
          dignissimos.
        </p>
        <form action="index.php" method="POST">
        <button type="submit" name="logout" class="cta">Logout</button>
        </form>
      </main>
    </section>
    <!-- Hero section end -->

    <!-- Abaout section start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="dani-ZLqxSzvVr7I-unsplash.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa Memilih Eka Snack?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
            incidunt obcaecati, earum natus itaque dolorum.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Consequuntur quo laboriosam consectetur porro. Expedita, nemo
            voluptates. Cum quisquam vel ratione?
          </p>
        </div>
      </div>
    </section>
    <!-- Abaout section end -->

    <!-- Menu section start -->
    <section id="menu-kami" class="menu-kami">
      <h2><span>Menu</span> Kami</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptatum
        officia aperiam aspernatur labore ipsam!
      </p>

      <div class="row">
        <div class="menu-card">
          <img
            src="nathan-dumlao-dAYJfrtVjh0-unsplash.jpg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Espresso -</h3>
          <p class="menu-card-price">IDR 15k</p>
        </div>
        <div class="menu-card">
          <img
            src="nathan-dumlao-dAYJfrtVjh0-unsplash.jpg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Espresso -</h3>
          <p class="menu-card-price">IDR 15k</p>
        </div>
        <div class="menu-card">
          <img
            src="nathan-dumlao-dAYJfrtVjh0-unsplash.jpg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Espresso -</h3>
          <p class="menu-card-price">IDR 15k</p>
        </div>
        <div class="menu-card">
          <img
            src="nathan-dumlao-dAYJfrtVjh0-unsplash.jpg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Espresso -</h3>
          <p class="menu-card-price">IDR 15k</p>
        </div>
      </div>
    </section>
    <!-- Menu section end -->

    <!-- contact section start -->

    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima,
        dignissimos.
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.76107779270993!2d109.36153000447052!3d-7.318603361717411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1714480144666!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="Nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="Email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="No HP" />
          </div>

          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>
    <!-- contact section end -->

    <!-- Footer start -->
    <footer>
      <div class="sosial">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="link">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu-kami">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">pdwhyd</a>. | &copy; 2024.</p>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- feather icons -->
    <script>
      feather.replace();
    </script>

    <!-- My JS -->
    <script src="script.js"></script>
  </body>
</html>
