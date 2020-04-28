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
          <!-- <li><a href="#">Login</a></li>
          <li><a href="#">Helpdesk</a></li>
          <li><a href="#">Alur</a></li>
          <li><a href="#">Beranda</a></li> -->
        </ul>
      </div>
    </header>
    <br>
    <br>
    <div class="container1">
      <h2><center>Sign Up</center></h2>
      <form class="" action="<?= base_url('signup')  ?>" method="post">
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/account.png" alt="">
            <input type="text" name="nik" placeholder="NIK"><br>
        </div>
        <small class="text-danger"><?= form_error('nik'); ?></small>
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/account.png" alt="">
            <input type="text" name="username" placeholder="Username"><br>
        </div>
        <small class="text-danger"><?= form_error('username'); ?></small>
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/password.png" alt="">
            <input type="password" name="password" placeholder="Password"><br>
        </div>
        <small class="text-danger"><?= form_error('password'); ?></small>
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/email.png" alt="">
            <input type="text" name="email" placeholder="Email"><br>
        </div>
        <small class="text-danger"><?= form_error('email'); ?></small>
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/kontak.png" alt="">
            <input type="text" name="kontak" placeholder="Kontak Pribadi"><br>
        </div>
        <small class="text-danger"><?= form_error('kontak'); ?></small>
        <input class="button" type="submit" name="" value="Sign Up">
        <br>
        <br>
        <br>
        <p>If you already have an account, please <a href="<?= base_url('login');?>">login here.</a></p>
      </form>
    </div>
  </body>
</html>
