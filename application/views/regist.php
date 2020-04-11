<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/custom-regist-login.css"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
  <link rel="icon" type="image/ico" href="assets/eyecare-logo-blue.png"/>
  <title>Daftar | Eyecare</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col d-flex justify-content-center">
      <div class="card position-absolute" style="width: 408px">
        <div class="card-body">
          <h3 class="text-center">Silahkan daftar untuk buat Akun</h3>
          <form action="">
            <div class="form-group-1">
              <label for="name">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" Placeholder="Jamet Kejam">
            </div>
            <div class="form-group-2">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" Placeholder="jametganggu@gmail.com">
            </div>
            <div class="form-group-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" Placeholder="6+ karakter">
            </div>
            <div class="terms text-center">
              <p>Dengan mendaftar untuk membuat akun.  Saya menyetujui <strong>Syarat Penggunaan</strong>  dan <strong>Kebijakan Pribadi.</strong></p>
            </div>
            <div class="d-flex justify-content-end">
              <div class="align-self-center"><a href="landing-page.php" class="btn-kembali">Kembali</a></div>
              <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
            <div class="d-flex justify-content-end">
              <a href="#" class="btn-masuk-2">Sudah punya akun ? Masuk di sini</a>
            </div>
          </form>
        </div>
      </div>
      <div class="bg-1">
        <img src="assets/bg-1.png" alt="Seharusnya ada background">
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url() ?>asset/bootstrap/bootstrap.js"></script>
</body>
</html>