<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css" type="text/css">
    <title>TOEFL | Intitut Teknologi Sumatera</title>
  </head>
  <body>
    <header>
      <div class="navi">
        <img src="<?php echo base_url() ?>/assets/img/itera.png" alt="">
          <h1>TOEFL ITERA</h1>
          <ul>
            <li><a href="<?php echo site_url('index.php/userberanda/logout')?>" style="padding-right: 0.5rem;">Logout</a></li>
            <li>
              <a href="<?= base_url('index.php/userkontak');?>" style="padding-right: 0.5rem;">Informasi Kontak</a></li>
            <li>
              <a href="<?= base_url('index.php/userscore');?>" style="padding-right: 0.5rem;">Score TOEFL</a></li>
            <li>
              <a href="<?= base_url('index.php/userdaftartes');?>" style="padding-right: 0.5rem;">Daftar Test</a></li>
            <li>
              <a href="<?= base_url('index.php/userprofile');?>" style="padding-right: 0.5rem;">Profile</a></li>
            <li>
              <a href="<?= base_url('index.php/userberanda');?>" style="padding-right: 0.5rem;">Beranda</a></li>
          </ul>
      </div>
    </header>
    <div class="main">
      <h2><center>Profile Anda</center></h2>

    </div>
  </body>
</html>
