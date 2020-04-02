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
          <li><a href="<?= base_url('index.php/admininputscore');?> " style="padding-right: 0.5rem;">Tambah Score</a></li>
          <li><a href="<?= base_url('index.php/admininfouser');?> " style="padding-right: 0.5rem;">Akun Pendaftar</a></li>
          <li><a href="<?= base_url('index.php/adminberanda');?> " style="padding-right: 0.5rem;">Beranda</a></li>
        </ul>
      </div>
      <div class="main">
        <h2><center>Tambah Nilai</center></h2>
  </body>
</html>
