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
      <form class="" action="<?php echo site_url('index.php/login/ceklogin')?>" method="post">
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/account.png" alt="">
            <input type="text" name="username" placeholder="Username atau Email"><br>
        </div>
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/password.png" alt="">
            <input type="password" name="password" placeholder="Password"><br>
        </div>
        <div style="color: red;font-family:'Open Sans',sans-serif;font-size: 13px;">
          <?php
            $info = $this->session->flashdata('info');
            if (!empty($info)){
              echo $info;
            }
            ?>
        </div>
        <input class="button" type="submit" name="" value="Login">
        <br>
        <br>
        <p>If you don't have an account, please</p><a href="<?php echo base_url() ?>/application/views/signup.php"></a>
        <a href="<?= base_url('index.php/signup');?>">register here.</a>
      </form>
    </div>
  </body>
</html>
