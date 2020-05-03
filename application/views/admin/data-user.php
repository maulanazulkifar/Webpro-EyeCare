<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/custom-navbar.css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/custom-admin.css"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
  <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>asset/image/icon-bar.png"/>
  <title>Eyecare - Halaman Admin</title>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a href="#"><img src="<?php echo base_url(); ?>asset/image/eyecare-logo-blue.png" alt="Logo" class="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active align-self-center" href="<?php echo base_url() ?>index.php/Admin/c_admin">Data Dokter</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/Admin/c_admin/janji">Data Janji</a>
        <a class="nav-item nav-link align-self-center" href="<?php echo base_url() ?>index.php/Admin/c_admin/data_user">Data User</a>
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <a href=""><button class="btn btn-danger">Logout</button></a>
    </div>
  </div>
</nav>

<section class="content">
  <div class="container">
    <div class="row mt-5">
      <div class="col text-center">
        <h3 class="">Data Akun Pasien</h3>
      </div>
    </div>
    <div class="row d-flex justify-content-end mt-5">
      <!-- Modal Trigger -->
      <button class="btn btn-tambah" data-toggle="modal" data-target="#tambahAkun">Tambah Akun</button>

      <!-- Modal -->
      <div class="modal fade" id="tambahAkun">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Form Tambah Data Akun</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url() ?>Admin/c_admin/tambah_user" method='post'>
              <div class="modal-body">
                <div class="form-group">
                  <label for="name">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                  <label for="name">Email</label>
                  <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                  <label for="name">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <table class="table  table-bordered">
        <thead class="thead-light">
          <tr>
          <th scope="col">Id</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col" colspan="2" class="text-center">Aksi</th>
          </tr>
          <?php 
            $no = 1;
            foreach($users as $u) {?>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->email ?></td>
            <td><?php echo $u->password ?></td>
            <td class="text-center"><a href="<?php echo base_url() ?>Admin/c_admin/hapus_user/<?php echo $u->user_id ?>" onclick="return confirm('Anda Yakin?')"><button class="btn btn-danger" >Hapus</button></a></td>
            <td>
              <div class="d-flex justify-content-center">
                <!-- Modal Trigger -->
                <button class="btn btn-info d-flex justify-content-center" data-toggle="modal" data-target="#editJanji">Edit</button>

                <!-- Modal -->
                <div class="modal fade" id="editJanji">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Form Edit Data Akun</h5>
                        <button type="button" class="close" data-dismiss="modal">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                       <form action="<?php echo base_url() ?>Admin/c_admin/update_user/<?php echo $u->user_id ?>" method="post">
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" value="Jamet Ganggu" name="nama">
                          </div>
                          <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" class="form-control" id="email" value="jametganggu@gmail.com" name="email">
                          </div>
                          <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" class="form-control" id="password" value="dengkulguakopong" name="password">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
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




</body>
</html>