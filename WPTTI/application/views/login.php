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
      <h2><center>Login</center></h2>
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<br><p class = "alert alert-success">' .$this->session->flashdata('user_registered').'</p><br>'; ?>
      <?php endif; ?>
      <?php if ($this->session->flashdata('user_unknown')): ?>
        <?php echo '<br><p class = "alert alert-danger">' .$this->session->flashdata('user_unknown').'</p><br>'; ?>
      <?php endif; ?>
      <?php if ($this->session->flashdata('wrong_password')): ?>
        <?php echo '<br><p class = "alert alert-danger">' .$this->session->flashdata('wrong_password').'</p><br>'; ?>
      <?php endif; ?>
      <?php if ($this->session->flashdata('sukses')): ?>
        <?php echo '<br><p class = "alert alert-success">' .$this->session->flashdata('sukses').'</p><br>'; ?>
      <?php endif; ?>
      <form class="" action="<?php echo site_url('login')?>" method="post">
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/account.png" alt="">
            <input type="text" name="username" placeholder="Username" value="<?= set_value('username');?>"><br>
        </div>
        <small class="text-danger"><?= form_error('username'); ?></small>
        <div class="data">
            <img src="<?php echo base_url() ?>/assets/img/password.png" alt="">
            <input type="password" name="password" placeholder="Password"><br>
        </div>
        <small class="text-danger"><?= form_error('password'); ?></small>
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
        <br>
        <p>If you don't have an account, please <a href="<?= base_url('signup');?>">register here.</a></p>
      </form>
    </div>
  </body>
</html>
