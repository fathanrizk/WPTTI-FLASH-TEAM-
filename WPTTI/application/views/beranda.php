<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css"> -->
    <title>TOEFL | Institut Teknologi Sumatera</title>

  </head>
  <body>
    <div class="navi">
      <img src="<?php echo base_url() ?>/assets/img/itera.png" alt="">
        <h1>TOEFL ITERA</h1>
        <ul>
          <li>
            <a href="<?php echo base_url(); ?>index.php/login" style="padding-right: 0.5rem;">Login</a></li>
          <li>
            <a href="<?= base_url('index.php/kontak');?>" style="padding-right: 0.5rem;">Contact Information</a></li>
          <li><a href="<?= base_url('index.php/beranda');?>" style="padding-right: 0.5rem;">Homepage</a></li>
        </ul>
      </div>
      <div class="main">
        <h2>Main Homepage<br>
           ITERA TOEFL Test Registration
              <?php if($this->session->flashdata('user_registered')): ?>
                <?php echo '<p class = "alert alert-success">' .$this->session->flashdata('user_registered').'</php>'; ?>
              <?php endif; ?>

        </h2>
        <center>
          <p style="margin-left: 1rem; margin-top: 1rem; padding-bottom: 1rem;">
            We provide some courses for specific purpose, like conversation in English and TOEFL<br>
            Preparation. We also provide some courses focused on improving your speaking, writing, <br>
            listening and reading skills.
          </p>
        </center>

        <a href="<?= base_url('index.php/login');?>">
         <button type="button" class="btn btn-lg btn-primary " style="margin-left:auto; margin-right:auto; display: block;">Register Now !
         </button>
        </a>

         <div id="myCarousel" class="carousel slide" data-ride="carousel" >
         <!-- Indicators -->
         <ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         </ol>

         <!-- Wrapper for slides -->
         <div class="carousel-inner" style="padding-top: 2rem;">
           <div class="item active">
             <img src="<?php echo base_url() ?>/assets/img/itera/3.jpg" alt="Los Angeles" style="width:38%;margin-left:auto; margin-right:auto; display: block;">
             <div class="carousel-caption">
               <h3>UPT Bahasa ITERA</h3>
               <p>Test TOEFL ITERA Always held on :<br>
                  Day      : Monday<br>
                  Time     : 1 pm <br>
                  Location : UPT Bahasa ITERA</p>
             </div>
           </div>
         </div>
       </div>
      </div>
  </body>
</html>
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <img src="">
  <a class="navbar-brand">UPT Bahasa ITERA</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
 </button>

  <div class="collapse navbar-collapse" id="navbarColor01">

    <ul class="navbar-nav ml-auto" style="font-weight: bold">
      <li class="nav-item ">
        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Informasi Kontak</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sign In</a>
      </li>

    </ul>

  </div>
</nav>-->
    <!--<img class="flex-column" src="<?php echo base_url() ?>/assets/img/itera.jpg" align="right" style="margin-right: 1rem">-->
      <!--<div class="nav">
        <h1>WEBSITE TOEFL ITERA</h1>
        <ul>
          <li><a href="#">Login</a></li>
          <li><a href="#">Helpdesk</a></li>
          <li><a href="#">Alur</a></li>
          <li><a href="#">Home</a></li>
        </ul>
      </div>-->
