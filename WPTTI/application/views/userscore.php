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
            <li><a href="<?php echo site_url('userberanda/logout')?>" style="padding-right: 0.5rem;">Logout</a></li>
            <li><a href="<?= base_url('userkontak');?>" style="padding-right: 0.5rem;">Contact Information</a></li>
            <li><a href="<?= base_url('userscore');?>" style="padding-right: 0.5rem;">Score TOEFL</a></li>
            <li><a href="<?= base_url('userdaftartes');?>" style="padding-right: 0.5rem;">Test Registration</a></li>
            <li><a href="<?= base_url('userprofile');?>" style="padding-right: 0.5rem;">Profile</a></li>
            <li><a href="<?= base_url('userberanda');?>" style="padding-right: 0.5rem;">Homepage</a></li>
          </ul>
      </div>
    </header>
    <div class="main">
      <h2><center style="padding-bottom: 1.5rem;padding-top: 2rem">Score Test TOEFL</center></h2>
      <p style="padding-left: 3rem;padding-top: 2rem;padding-bottom: 1.5rem;">
      </p>
    </div>
  </body>
</html>
