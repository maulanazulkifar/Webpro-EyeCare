<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/custom-navbar.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/custom-form-janji.css"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
  <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>asset/image/icon-bar.png"/>
  <title>Form Janji | Eyecare</title>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a href="#"><img src="<?php echo base_url(); ?>asset/image/eyecare-logo-blue.png" alt="Logo" class="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <div class="navbar-nav">
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/welcome">Home</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/welcome/tentang">Tentang Kami</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/welcome/layanan">Layanan</a>
        <a class="nav-item nav-link active align-self-center" href="<?php echo base_url() ?>index.php/cbook">Book Now</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/welcome/faq">FAQ</a>
      </div>
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <div class="align-self-center">
        <a href="<?php echo base_url() ?>index.php/clogin"><button class="btn btn-masuk" >Masuk</button></a>
      </div>
      <a href="<?php echo base_url() ?>index.php/cregist"><button class="btn btn-primary">Daftar</button></a>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="heroimg d-flex justify-content-center">
    <img src="<?php echo base_url(); ?>asset/image/images-4.png" alt="Hero image">
  </div>
</section>

<section class="form-data">
  <div class="container">
     <?php echo form_open('C_janji/input');?>
      <div class="row">
        <div class="col text-center">
          <h2>Silahkan isi form di bawah</h2>
          <p>Lengkapi formulir dibawah untuk membuat janji dengan dokter</p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col d-flex justify-content-center">
        <div class="form-group-1">
          <label for="nama-pasien">Nama Pasien</label>
          <input type="text" name="nama" class="form-control" id="nama-pasien" Placeholder="Nama lengkap">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
        <div class="form-group-1">
          <label for="usia-pasien">Usia Pasien</label>
          <input type="text" name="usia" class="form-control" id="usia-pasien" Placeholder="Contoh: 23 tahun">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
        <div class="form-group-1">
          <label for="no-telp">No. Telfon</label>
          <input type="text" class="form-control" name="telf" id="no-telp" Placeholder="Minimal 10 digit">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
        <div class="form-group-2">
          <label for="keluhan">Keluhan</label>
          <textarea name="keluhan" id="keluhan" class="form-control" rows="10" Placeholder="Tuliskan keluhan anda di sini" style="width:551px;"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="dokter col text-center">
          <h2>Silahkan pilih dokter anda</h2>
          <p>Pilih dokter yang anda inginkan dan jadwalnya</p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col d-flex justify-content-center">
          <div class="form-group-1">
            <label for="pilih-dokter">Nama Dokter</label>
            <select class="form-control" id="pilih-dokter" name="dokter">
              <option>-- Silahkan pilih dokter -- </option>
              <option>dr. Uvuvwewewe, SpM</option>
              <option>dr. Onyetenyevwe, SpM</option>
              <option>dr. Ugwemubwem, SpM</option>
              <option>dr. Ossas, SpM</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center ">
          <div class="form-group-1">
            <label for="jadwal-dokter">Jadwal Dokter</label>
            <select class="form-control" id="jadwal-dokter" name="jadwal">
              <option>-- Silahkan pilih jadwal --</option>
              <option>Senin: 16:00-18:00 WIB</option>
              <option>Kamis: 16:00-18:00 WIB</option>
              <option>Jumat: 16:00-18:00 WIB</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    <?php echo form_close();?>
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