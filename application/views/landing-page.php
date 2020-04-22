<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/custom-navbar.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/custom-landing-page.css"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
  <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>asset/image/icon-bar.png"/>
  <title>Eyecare - Klinik Mata Kepercayaan Anda</title>
  
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a href="#"><img src="<?php echo base_url(); ?>asset/image/eyecare-logo-blue.png" alt="Logo" class="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active align-self-center" href="<?php echo base_url() ?>application/views/book.php">Home</a>
        <a class="nav-item nav-link align-self-center" href="tentang.php">Tentang Kami</a>
        <a class="nav-item nav-link align-self-center" href="#">Layanan</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>application/views/book.php">Book Now</a>
        <a class="nav-item nav-link align-self-center" href="#">FAQ</a>
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <div class="align-self-center">
        <!-- <a href="login.php" class="btn-masuk">Masuk</a> -->
        <a href="<?php echo base_url() ?>application/views/login.php"><button class="btn btn-masuk">Masuk</button></a>
      </div>
      <a href="<?php echo base_url() ?>application/views/regist.php"><button class="btn btn-primary">Daftar</button></a>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="container">
    <div class="row mt-5">
      <div class="col align-self-center">
        <h2>Eyecare, Klinik mata kepercayaan anda</h2>
        <p class="subtext">Di Klinik kami pasien adalah prioritas utama kami.  Dokter kami adalah para dokter mata terbaik di Indonesia dengan pengalaman bertahun-tahun dalam bidang keahliannya masing-masing.</p>
        <p class="subtext">Dilengkapi dengan teknologi terdepan dalam layanan kesehatan mata di Indonesia.</p>
        <a href="<?php echo base_url() ?>application/views/book.php"><button class="btn btn-primary ">Book Now <img class="panah" src="<?php echo base_url(); ?>asset/image/arrow-right.png"  alt="Arrow"></button></a>
      </div>
      <div class="col">
        <img src="<?php echo base_url(); ?>asset/image/images-1.png" alt="Photo by Daniil Kuželev at Unsplash.com">
      </div>
    </div>
  </div>
</section>

<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-3"><img src="<?php echo base_url(); ?>asset/image/eyecare-logo-white.png" alt="Logo Eyecare White"></div>
      <div class="col-2">
        <ul class="footer-menu">
          <li>Tentang Kami</li>
          <li>Layanan</li>
          <li>Book Now</li>
          <li>FAQ</li>
        </ul>
      </div>
      <div class="col-3">
        <ul class="footer-menu">
          <li>Kontak Kami</li>
          <li>Syarat & Ketentuan</li>
          <li>Kebijakan Privasi</li>
        </ul>
      </div>
      <div class="col-4">
        <ul class="footer-sosmed">
          <li>Ikuti Kami</li>
          <li>
            <img src="<?php echo base_url(); ?>asset/image/instagram.png" alt="Instagram icon">
            <img src="<?php echo base_url(); ?>asset/image/facebook.png" alt="Facebook icon">
            <img src="<?php echo base_url(); ?>asset/image/twitter.png" alt="Twitter icon">
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <hr class="hr-line">
        <span >&copy; Eyecare 2020</span>
      </div>
    </div>
  </div>
</section>

<script src="<?php echo base_url() ?>asset/js/bootstrap.js"></script>
</body>
</html>
