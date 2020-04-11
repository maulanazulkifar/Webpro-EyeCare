<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/custom-navbar.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/css/custom-landing-page.css"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
  <link rel="icon" type="image/ico" href="assets/eyecare-logo-blue.png"/>
  <title>Eyecare - Klinik Mata Kepercayaan Anda</title>
  
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a href="#"><img src="assets/eyecare-logo-blue.png" alt="Logo" class="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active align-self-center" href="landing-page.php">Home</a>
        <a class="nav-item nav-link align-self-center" href="tentang.php">Tentang Kami</a>
        <a class="nav-item nav-link align-self-center" href="#">Layanan</a>
        <a class="nav-item nav-link align-self-center" href="#">Book Now</a>
        <a class="nav-item nav-link align-self-center" href="#">FAQ</a>
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <div class="align-self-center">
        <a href="user-profile.php" class="nav-item nav-link align-self-center">Profile</a>
        <!-- <a href="login.php"><button class="btn btn-masuk">Masuk</button></a> -->
      </div>
      <!-- <a href="regist.php"><button class="btn btn-primary">Daftar</button></a> -->
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
        <a href="regist.php"><button class="btn btn-primary ">Book Now <img class="panah" src="assets/arrow-right.png" alt="Arrow"></button></a>
      </div>
      <div class="col">
        <img src="assets/images-1.png" alt="Photo by Daniil Kuželev at Unsplash.com">
      </div>
    </div>
  </div>
</section>
    <script src="<?php echo base_url() ?>asset/js/bootstrap.js"></script>
</body>
</html>