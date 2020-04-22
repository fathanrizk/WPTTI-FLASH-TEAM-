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
          <li><a href="<?php echo site_url('userberanda/logout')?>" style="padding-right: 0.5rem;">Logout</a></li>
          <li><a href="<?= base_url('userkontak');?>" style="padding-right: 0.5rem;">Contact Information</a></li>
          <li><a href="<?= base_url('userscore');?>" style="padding-right: 0.5rem;">Score TOEFL</a></li>
          <li><a href="<?= base_url('userdaftartes');?>" style="padding-right: 0.5rem;">Test Registration</a></li>
          <li><a href="<?= base_url('userprofile');?>" style="padding-right: 0.5rem;">Profile</a></li>
          <li><a href="<?= base_url('userberanda');?>" style="padding-right: 0.5rem;">Homepage</a></li>
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

      <a href="<?= base_url('userdaftartes');?>">
      <button type="button" class="btn btn-lg btn-primary" style="margin-left:auto; margin-right:auto; display: block;">Register Now !
      </button>
      </a>

      <br>
      <img src="<?php echo base_url() ?>/assets/img/itera/2.jpg" alt="Los Angeles" style="width:38%;margin-left:auto; margin-right:auto; display: block;">
      <br>
      <br>
      <br>
    </div>
  </body>
  <footer>
    <ul>
      <center><p>Copyright FLASH-TEAM @2020</p></center>
    </ul>
  </footer>
  </html>
