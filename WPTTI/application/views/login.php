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
    <div class="container2">
      <h2><center>Login</center></h2>
      <form class="" action="index.html" method="post">
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/account.png" alt="">
            <input type="text" name="" placeholder="Username atau Email"><br>
        </div>
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/password.png" alt="">
            <input type="password" name="" placeholder="Password"><br>
        </div>
        <input class="button" type="submit" name="" value="Login">
        <br>
        <br>
        <p>Jika anda belum memiliki akun, silahkan</p><a href="<?php echo base_url() ?>/application/views/signup.php"></a>
        <a href="<?= base_url('index.php/signup');?>">daftar disini</a>
      </form>
    </div>
  </body>
</html>
