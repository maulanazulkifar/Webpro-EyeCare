<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/custom-navbar.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/custom-book.css"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
  <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>asset/image/icon-bar.png"/>
  <title>Book Now | Eyecare</title>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a href="#"><img src="<?php echo base_url(); ?>asset/image/eyecare-logo-blue.png" alt="Logo" class="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <div class="navbar-nav">
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/welcome">Home</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/tentang">Tentang Kami</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/layanan">Layanan</a>
        <a class="nav-item nav-link active align-self-center" href="<?php echo base_url() ?>index.php/cbook">Book Now</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/faq">FAQ</a>
      </div>
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
        <div class="col mr-5">
          <img src="<?php echo base_url(); ?>asset/image/images-2.png" alt="Photo by Charles Deluvio on Unsplash.com">
        </div>
        <div class="col align-self-center">
          <h2>Buat janji dengan dokter via Online</h2>
          <p class="subtext mt-4">Salah satu keunggulan dari klinik kami yaitu, dapat membuat janji temu dengan dokter tanpa harus datang ke klinik kami.</p>
          <p class="subtext">Anda hanya perlu memilih dokter dan jadwal yang sesuai dengan waktu anda. Lalu datang ke klinik sesuai dengan yang sudah anda tentukan.</p>
          <a href="<?php echo base_url() ?>index.php/cjanji"><button class="btn btn-primary mt-4">Buat janji sekarang</button></a>
        </div>
      </div>
  </div>
</section>

<section class="konten" style="margin-top: 80px;">
  <div class="container">
    <div class="row">
      <div class="col align-self-center">
        <h2 style="">Dokter yang berpengalaman</h2>
        <p class="subtext mt-4">Di Eyecare Klinik Mata, Anda akan ditangani oleh dokter-dokter spesialis senior mata yang sudah 38 tahun lebih terlatih dan terampil di bidangnya.</p>
        <p class="subtext">Mereka juga telah difasilitasi oleh alat-alat yang memadai untuk menunjang kerja mereka.</p>
      </div>
      <div class="col">
        <img src="<?php echo base_url(); ?>asset/image/images-3.png" alt="Foto dokter lawak..">
      </div>
    </div>
  </div>
</section>

<!-- <section class="list-dokter">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2>Dokter dan jadwal prakteknya</h2>
        <p>Silahkan pilih dokter yang anda inginkan dan lihat juga jadwalnya.</p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <div class="card">
          <div class="card-body text-center">
            <img src="<//?php echo base_url(); ?>asset/image/dokter-1.png" alt="Foto Dokter">
            <p class="card-title mt-4 mb-3">dr. Uvuvwewewe, SpM</p>
            <p class="card-text mb-2">Senin: 16:00-18:00 WIB</p>
            <p class="card-text mb-2">Kamis: 16:00-18:00 WIB</p>
            <p class="card-text mb-2">Jumat: 16:00-18:00 WIB</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body text-center">
            <img src="<//?php echo base_url(); ?>asset/image/dokter-2.png" alt="Foto Dokter">
            <p class="card-title mt-4 mb-3">dr. Onyetenyevwe, SpM</p>
            <p class="card-text mb-2">Selasa: 10:00-14:00 WIB</p>
            <p class="card-text mb-2">Rabu: 10:00-14:00 WIB</p>
            <p class="card-text mb-2">Sabtu: 10:00-14:00 WIB</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body text-center">
            <img src="<//?php echo base_url(); ?>asset/image/dokter-3.png" alt="Foto Dokter">
            <p class="card-title mt-4 mb-3">dr. Ugwemubwem, SpM</p>
            <p class="card-text mb-2">Selasa: 09:00-13:00 WIB</p>
            <p class="card-text mb-2">Rabu: 09:00-13:00 WIB</p>
            <p class="card-text mb-2">Jumat: 09:00-13:00 WIB</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body text-center">
            <img src="<//?php echo base_url(); ?>asset/image/dokter-4.png" alt="Foto Dokter">
            <p class="card-title mt-4 mb-3">dr. Ossas, SpM</p>
            <p class="card-text mb-2">Selasa: 09:00-13:00 WIB</p>
            <p class="card-text mb-2">Rabu: 09:00-13:00 WIB</p>
            <p class="card-text mb-2">Jumat: 09:00-13:00 WIB</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <a href="#" class="btn btn-primary mt-5">Buat janji sekarang</a>
      </div>
    </div>
  </div>
</section> -->

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
