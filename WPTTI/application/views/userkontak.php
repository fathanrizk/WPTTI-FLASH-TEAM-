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
            <li><a href="#" style="padding-right: 0.5rem;">Logout</a></li>
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
      <h2><center>Kontak Kami</center></h2>
      <h3><center><br>UPT Bahasa ITERA</center><h3>
      <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6657.5910258152!2d105.31576141970442!3d-5.360187290546556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c33a246ace5d%3A0x4979e8372dfd6af0!2sGedung%20E%20ITERA!5e0!3m2!1sid!2sid!4v1583987425415!5m2!1sid!2sid"
         width="800" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </center>
      <div class="alamat">
        <h3>Alamat Kami</h3>
        <h4>UPT Bahasa Institut Teknologi Sumatera</h4>
        <p>Jl. Terusan Ryacudu, Way Huwi, Kec. Jati Agung, <br>
           Kabupaten Lampung Selatan, Lampung 35365<br>
           Gedung E Lantai 2 E214<br>
           HP +62 811-7245-544</p>
      </div>
    </div>
    </body>
</html>
