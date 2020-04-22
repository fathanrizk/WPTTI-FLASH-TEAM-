<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/master.css" type="text/css">
    <title>TOEFL | Intitut Teknologi Sumatera</title>
  </head>
  <body>
    <header>
      <div class="nav">
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
    <div class="container">
      <?php echo validation_errors(); ?>
      <h2><center>Sign Up</center></h2>
      <form class="" action="<?= base_url('signup')  ?>" method="post">
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/account.png" alt="">
            <input type="text" name="username" placeholder="Username"><br>
        </div>
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/password.png" alt="">
            <input type="password" name="password" placeholder="Password"><br>
        </div>
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/nim.png" alt="">
            <input type="text" name="nim" placeholder="NIM"><br>
        </div>
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/email.png" alt="">
            <input type="text" name="email" placeholder="Email"><br>
        </div>
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/kontak.png" alt="">
            <input type="text" name="kontak" placeholder="Kontak Pribadi"><br>
        </div>
        <input class="button" type="submit" name="" value="Sign Up">
      </form>
    </div>
  </body>
</html>
