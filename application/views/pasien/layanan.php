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

  <title>Layanan | Eyecare</title>
  <link rel="icon" type="image/ico" href="assets/eyecare-logo-blue.png"/>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top">
 <div class="container">
    <a href="#"><img src="<?php echo base_url(); ?>asset/image/eyecare-logo-blue.png" alt="Logo" class="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
       <div class="navbar-nav">
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>pasien/c_pasien/">Home</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>pasien/c_pasien/tentang">Tentang Kami</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>pasien/c_pasien/layanan">Layanan</a>
        <a class="nav-item nav-link active align-self-center" href="<?php echo base_url() ?>pasien/c_pasien/book">Book Now</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>pasien/c_pasien/faq">FAQ</a>
      </div>
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <div class="d-flex justify-content-end">
      <a href="<?php echo base_url() ?>pasien/c_pasien/logout"><button class="btn btn-danger">Logout</button></a>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="container">
    <div class="row mt-5">
      <div class="col align-self-center">
        <h2>Layanan EyeCare</h2>
        <p class="text mt-4"> EyeCare merupakan salah satu jaringan rumah sakitmata/klinik mata terbesar di Indonesia. Kami berkomitmen untuk menyediakan layanan mata dengan kualitas terbaik dengan suasana yang nyaman dan bersahabat. Visi kami adalah menjadi panutan pelayanan kesehatan berstandar internasional. Misi kami adalah senantiasa berupaya untuk memberikan pengobatan dan pelayanan pasien dengan kualitas terbaik oleh para professional yang cakap di bidangnya dengan etika yang tinggi. Di EyeCare, kami akan melakukan upaya yang terbaik agar Anda atau orang yang Anda kasihi akan mendapat perawatan terbaik sebelum, selama, dan setelah pengobatan.</p>
        <p class="text">EyeCare menyediakan layanan mata terpadu. Selain memiliki tim dokter mata yang sangat berpengalaman dan dilengkapi dengan teknologi diagnostik, pengobatan dan operasi terbaru dalam layanan kesehatan mata, kami juga memiliki klinik rawat jalan, layanan rawat sehari (one-day care), serta rawat inap untuk operasi.</p>
        <p class="subtext"> Staf kami di EyeCare menantikan kehadiran Anda!</p>
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
