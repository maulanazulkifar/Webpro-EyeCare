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

  <title>Tentang Kami | Eyecare</title>
  <link rel="icon" type="image/ico" href="assets/eyecare-logo-blue.png"/>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a href="#"><img src="<?php echo base_url(); ?>asset/image/eyecare-logo-blue.png" alt="Logo" class="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/welcome">Home</a>
        <a class="nav-item nav-link active align-self-center" href="<?php echo base_url() ?>index.php/tentang">Tentang Kami</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/layanan">Layanan</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/cbook">Book Now</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/faq">FAQ</a>
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <div class="align-self-center">
        <!-- <a href="login.php" class="btn-masuk">Masuk</a> -->
        <a href="<?php echo base_url() ?>index.php/clogin"><button class="btn btn-masuk" >Masuk</button></a>
      </div>
      <a href="<?php echo base_url() ?>index.php/cregist"><button class="btn btn-primary">Daftar</button></a>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="container">
    <div class="row mt-5">
      <div class="col align-self-center">
        <h2>Tentang EyeCare</h2>
        <p class="subtext mt-4">EyeCare merupakan klinik yang telah dipercaya dan dikenal luas oleh masyarakat, yang didirikan oleh Dr. Ghifari Fazlul, SpM. Klinik pertama dibuka pada tahun 2020. Kecintaan Dr. Ghifari Fazlul yang mendalam terhadap kesehatan mata dan layanan medis paripurna membuka jalan bagi berdirinya 5 Rumah Sakit Mata/Klinik Mata EyeCare di Indonesia. Rumah Sakit Mata/Klinik Mata EyeCare ini berlokasi di Kemayoran, Kebon Jeruk, Jakarta Selatan, Pantai Indah Kapuk, dan Semarang.</p>
        <p class="subtext">Dilengkapi dengan teknologi terdepan dalam layanan kesehatan mata di Indonesia, Klinik EyeCare siap membantu anda dalam merawat kesehatan mata anda.</p>
        <a href="<?php echo base_url() ?>index.php/cbook"><button class="btn btn-primary mt-4">Book Now <img class="panah" src="<?php echo base_url(); ?>asset/image/arrow-right.png"  alt="Arrow"></button></a>
      </div>
      <div class="col">
        <img src="<?php echo base_url(); ?>asset/image/img-src3.jpg">
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
          <a href="<?php echo base_url() ?>index.php/tentang" style="color:white">Tentang Kami</a> <br> <br>
          <a href="<?php echo base_url() ?>index.php/layanan" style="color:white">Layanan</a> <br> <br>
          <a href="<?php echo base_url() ?>index.php/cbook" style="color:white">Book Now</a> <br> <br>
          <a href="<?php echo base_url() ?>index.php/faq" style="color:white">FAQ</a>
        </ul>
      </div>
      <div class="col-3">
        <ul class="footer-menu">
          <li>Kontak Kami</li>
          <a href="<?php echo base_url() ?>index.php/disclaimer" style="color:white">Disclaimer</a> <br> <br>
          <a href="<?php echo base_url() ?>index.php/kebijakanprivasi" style="color:white">Kebijakan Privasi</a>
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
