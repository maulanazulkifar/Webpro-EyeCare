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

  <title>Kebijakan Privasi | Eyecare</title>
  <link rel="icon" type="image/ico" href="assets/eyecare-logo-blue.png"/>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a href="#"><img src="<?php echo base_url(); ?>asset/image/eyecare-logo-blue.png" alt="Logo" class="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <div class="navbar-nav">
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>welcome">Home</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>tentang">Tentang Kami</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>layanan">Layanan</a>
        <a class="nav-item nav-link active align-self-center" href="<?php echo base_url() ?>cbook">Book Now</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>faq">FAQ</a>
      </div>
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <div class="align-self-center">
        <!-- <a href="login.php" class="btn-masuk">Masuk</a> -->
        <a href="<?php echo base_url() ?>clogin"><button class="btn btn-masuk" >Masuk</button></a>
      </div>
      <a href="<?php echo base_url() ?>cregist"><button class="btn btn-primary">Daftar</button></a>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="container">
    <div class="row mt-5">
      <div class="col align-self-center">
        <h1>Kebijakan Privasi</h2>
        <p class="text">Website ini memberikan berbagai jenis informasi penting tentang Klinik EyeCare, seperti cakupan layanan dan fasilitas yang ada, berita terkini, info lokasi dan jadwal praktek dokter, hingga fitur registrasi online. Kami berharap agar website kami dapat memberikan informasi kepada Anda, sebagai pengunjung website kami, pemahaman yang menyeluruh mengenai cakupan layanan dan komitmen kami untuk menyediakan layanan terbaik. Kami berharap agar pemahaman ini dapat meyakinkan Anda untuk mempercayakan pelayanan kesehatan Anda dan keluarga kepada Klinik EyeCare. Terima kasih </p>
        <h1> Kerahasian Data Pasien </h1>
        <p class="text">Kami sangat berkomitmen untuk menjaga kerahasiaan data Anda, termasuk yang berhubungan dengan General Data Protection Regulation (GDPR) jika berlaku. Segala informasi yang diberikan melalui fitur “Book Now" pada website kami akan diperlakukan sebagai data rahasia dan tidak akan diberikan kepada pihak lain untuk tujuan komersial.</p>
        <h1>Pembaharuan Isi Website</h2>
        <p class="text">Kami berhak untuk melakukan perubahan dan koreksi terhadap Syarat dan Ketentuan sesuai dengan Hukum yang berlaku dari website ini. Silakan mengunjungi website kami dari waktu ke waktu untuk meninjau perubahan-perubahan dan informasi tambahan baru.</p>
        <h1>Kebijakan Penggunaan Cookies</h2>
        <p class="text">Website ini menggunakan cookies, pelacakan piksel dan teknologi terkait. Cookies adalah file data kecil yang digunakan oleh platform kami dan disimpan di perangkat Anda. Website kami menggunakan cookies yang diberikan oleh kami maupun pihak ketiga untuk berbagai keperluan termasuk untuk mengoperasikan dan mempersonalisasi website. Selain itu, cookies juga dapat digunakan untuk melacak bagaimana Anda menggunakan website untuk menargetkan iklan kepada Anda pada website lain.</p>
        <a href="<?php echo base_url() ?>index.php/cbook"><button class="btn btn-primary mt-4">Book Now <img class="panah" src="<?php echo base_url(); ?>asset/image/arrow-right.png"  alt="Arrow"></button></a>
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
          <a href="<?php echo base_url() ?>index.php/kontak" style="color:white">Kontak Kami</a> <br> <br>
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
