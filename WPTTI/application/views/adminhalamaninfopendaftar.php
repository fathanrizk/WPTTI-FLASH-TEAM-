<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css"> -->
    <title>TOEFL | Institut Teknologi Sumatera</title>

  </head>
  <body>
    <div class="navi">
      <img src="<?php echo base_url() ?>/assets/img/itera.png" alt="">
        <h1>TOEFL ITERA</h1>
        <ul>
          <li><a href="<?= base_url('index.php/login');?> " style="padding-right: 0.5rem;">Logout</a></li>
          <li><a href="<?= base_url('index.php/adminberanda');?> " style="padding-right: 0.5rem;">Beranda</a></li>
        </ul>
    </div>
    <div class="main">
      <h2>Informasi Akun Pendaftar</h2>
      <form action= "" method="get">
        <input class="pencarian" type="text" name="keyword">
        <input class="button" type="submit" name="" value="cari"><br><br>
      </form>
      <br>
      <br>
      
      <!-- DISINI ISINYA LIST AKUN, FUNGSI HAPUS AKUN, INPUT SOCRE-->
    </div>
  </body>
</html>
