<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css"> -->
    <title>TOEFL | Intitut Teknologi Sumatera</title>

  </head>
  <body>
    <div class="navi">
      <img src="<?php echo base_url() ?>/assets/img/itera.png" alt="">
        <h1>TOEFL ITERA</h1>
        <ul>
          <li>
            <a href="<?php echo site_url('index.php/userberanda/logout')?>" style="padding-right: 0.5rem;">Logout</a></li>
          <li>
            <a href="<?= base_url('index.php/userkontak');?>" style="padding-right: 0.5rem;">Contact Information</a></li>
          <li>
            <a href="<?= base_url('index.php/userscore');?>" style="padding-right: 0.5rem;">Score TOEFL</a></li>
          <li>
            <a href="<?= base_url('index.php/userdaftartes');?>" style="padding-right: 0.5rem;">Test Registration</a></li>
          <li>
            <a href="<?= base_url('index.php/userprofile');?>" style="padding-right: 0.5rem;">Profile</a></li>
          <li>
            <a href="<?= base_url('index.php/userberanda');?>" style="padding-right: 0.5rem;">Homepage</a></li>
        </ul>
    </div>
    <div class="main">
      <h2>Main Homepage<br>
         ITERA TOEFL Test Registration
      </h2>
      <center>
        <p style="margin-left: 1rem; margin-top: 1rem">
          We provide some courses for specific purpose, like conversation in English and TOEFL<br>
          Preparation. We also provide some courses focused on improving your speaking, writing, <br>
          listening and reading skills.
        </p>
      </center>

      <a href="<?= base_url('index.php/userdaftartes');?>">
      <button type="button" class="btn btn-lg btn-primary" style="margin-left:auto; margin-right:auto; display: block;">Daftar Test
      </button>
      </a>
      
      <br>
      <img src="<?php echo base_url() ?>/assets/img/itera/2.jpg" alt="Los Angeles" style="width:38%;margin-left:auto; margin-right:auto; display: block;">
    </div>
  </body>
  </html>
  <!-- <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <img src="">
      <a class="navbar-brand">UPT Bahasa ITERA</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
     </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto" style="font-weight: bold">
          <li class="nav-item ">
            <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Informasi Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Daftar Test TOEFL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Score TOEFL</a>
          </li>
        </ul>

      </div>
    </nav>
    <center>
      <h1>Beranda <br>Pendaftaran Test TOEFL ITERA</h1>
      <p style="margin-left: 1rem; margin-top: 1rem">
      We provide some courses for specific purpose, like conversation in English and TOEFL<br>
      Preparation. We also provide some courses focused on improving your speaking, writing, <br>
      listening and reading skills.</p>
    </center>

    <button type="button" class="btn btn-lg btn-primary float-left">Daftar Test</button>
    <img src="/assets/img/26iterajpg_8778S-450x270 (1).jpg" align="right" height="500px">
      <div class="nav">
        <h1>WEBSITE TOEFL ITERA</h1>
        <ul>
          <li><a href="#">Login</a></li>
          <li><a href="#">Helpdesk</a></li>
          <li><a href="#">Alur</a></li>
          <li><a href="#">Home</a></li>
        </ul>
      </div>


  </body>-->
