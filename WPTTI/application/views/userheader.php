<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css"> -->
    <title>TOEFL | Intitut Teknologi Sumatera</title>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="margin-left:2.9rem; margin-right:2.9rem;margin-top: 1rem;background:#fff;">
      <img src="<?php echo base_url() ?>/assets/img/itera.png" width="50" height="55" alt="">
      <a class="navbar-brand" href="<?= base_url('beranda');?>" style="font-size:40px; padding-left:2rem; color:black;">TOEFL ITERA</a>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark" style="margin-left:2.9rem; margin-right:2.9rem;background-color:#daa520;">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('userberanda');?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('userprofile')?>">Profile <span class="sr-only">(current)</span></a></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('userdaftartes')?>">Test Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('userscore')?>">Score TOEFL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('userkontak');?>">Contact Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('login/logout')?>">Logout</a>
          </li>
      </div>
    </nav>
    <!--<div class="navi">
      <img src="<?php echo base_url() ?>/assets/img/itera.png" alt="">
        <h1>TOEFL ITERA</h1>
        <ul>
          <li><a href="<?= site_url('login/logout')?>" style="padding-right: 0.5rem;">Logout</a></li>
          <li><a href="<?= base_url('userkontak');?>" style="padding-right: 0.5rem;">Contact Information</a></li>
          <li><a href="<?= base_url('userscore');?>" style="padding-right: 0.5rem;">Score TOEFL</a></li>
          <li><a href="<?= base_url('userdaftartes');?>" style="padding-right: 0.5rem;">Test Registration</a></li>
          <li><a href="<?= base_url('userprofile');?>" style="padding-right: 0.5rem;">Profile</a></li>
          <li><a href="<?= base_url('userberanda');?>" style="padding-right: 0.5rem;">Homepage</a></li>
        </ul>
    </div>-->
