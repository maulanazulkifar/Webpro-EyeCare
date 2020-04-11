<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/custom-regist-login.css"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
  <link rel="icon" type="image/ico" href="assets/eyecare-logo-blue.png"/>
  <title>Masuk | Eyecare</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col d-flex justify-content-center">
      <div class="card position-absolute" style="width: 408px">
        <div class="card-body">
          <h3 class="text-center">Selamat datang kembali di Eyecare</h3>
          <form action="">
            <div class="form-group-2">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" Placeholder="jametganggu@gmail.com">
            </div>
            <div class="form-group-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" Placeholder="6+ karakter">
            </div>
            <div class="d-flex justify-content-end">
              <div class="align-self-center"><a href="landing-page.php" class="btn-kembali">Kembali</a></div>
              <button type="submit" class="btn btn-primary">Masuk</button>
            </div>
            <div class="d-flex justify-content-end">
              <a href="#" class="btn-masuk-2">Belum punya akun ? Daftar di sini</a>
            </div>
          </form>
        </div>
      </div>
      <div class="bg-1">
        <img src="<?php echo base_url(); ?>asset/image/bg-1.png" alt="Seharusnya ada background">
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url() ?>asset/bootstrap/bootstrap.js"></script>
</body>
</html>