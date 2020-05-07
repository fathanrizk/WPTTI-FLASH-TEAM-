<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css"> -->
    <title>TOEFL | Institut Teknologi Sumatera</title>

  </head>
  <body>
    <!-- As a link -->
      <nav class="navbar navbar-expand-lg" style="margin-left:2.9rem; margin-right:2.9rem;margin-top: 1rem;background:#fff;">
        <img src="<?php echo base_url() ?>/assets/img/itera.png" width="50" height="55" alt="">
        <a class="navbar-brand" href="<?= base_url('beranda');?>" style="font-size:40px; padding-left:2rem; color:black;">TOEFL ITERA</a>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-dark" style="margin-left:2.9rem; margin-right:2.9rem;background-color:#daa520;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('adminberanda');?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('login/logout')?>">Logout</a>
            </li>
        </div>
      </nav>
