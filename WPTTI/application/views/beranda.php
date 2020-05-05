<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css"> -->
    <title>TOEFL | Intitut Teknologi Sumatera</title>

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
              <a class="nav-link" href="<?= base_url('beranda');?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('kontak');?>">Contact Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('login')?>">Login</a>
            </li>
        </div>
      </nav>
    <!--<div class="navi">
        <ul>

          <h1>TOEFL ITERA</h1>
          <li><a href="<?= base_url('login')?>" style="padding-right: 0.5rem;">Login</a></li>
          <li><a href="<?= base_url('kontak');?>" style="padding-right: 0.5rem;">Contact Information</a></li>
          <li><a href="<?= base_url('beranda');?>" style="padding-right: 0.5rem;">Homepage</a></li>
        </ul>
    </div>-->
      <div class="container-fluid">
        <center>
          <p style="margin-left: 1rem; padding-bottom: 1rem;">
            "We provide some courses for specific purpose, like conversation in English and TOEFL<br>
            Preparation. We also provide some courses focused on improving your speaking, writing, <br>
            listening and reading skills."
          </p>
        </center>

        <center><a style="text-decoration: none;" href="<?= base_url('login');?>">
         <button type="button" class="btn btn-lg btn-primary" style="display: block;">Register Now !</button>
        </a></center>
        <br>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-25" src="<?php echo base_url() ?>/assets/img/itera/3.jpg" alt="First slide" style="width:38%;margin-left:auto; margin-right:auto; display: block;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-25" src="<?php echo base_url() ?>/assets/img/itera/1.jpg" alt="Second slide" style="width:38%;margin-left:auto; margin-right:auto; display: block;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-25" src="<?php echo base_url() ?>/assets/img/itera/2.jpg" alt="Third slide" style="width:38%;margin-left:auto; margin-right:auto; display: block;">
            </div>
          </div>
        </div>
        <br>
        <br>
      </div>
