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
          <li><a href="<?php echo base_url('login'); ?>" style="padding-right: 0.5rem;">Login</a></li>
          <li><a href="<?= base_url('kontak');?>" style="padding-right: 0.5rem;">Contact Information</a></li>
          <li><a href="<?= base_url('beranda');?>" style="padding-right: 0.5rem;">Homepage</a></li>
        </ul>
      </div>
      <div class="main">
        <h2>Main Homepage<br>
           ITERA TOEFL Test Registration
        </h2>
        <center>
          <p style="margin-left: 1rem; margin-top: 1rem; padding-bottom: 1rem;">
            We provide some courses for specific purpose, like conversation in English and TOEFL<br>
            Preparation. We also provide some courses focused on improving your speaking, writing, <br>
            listening and reading skills.
          </p>
        </center>

        <a href="<?= base_url('login');?>">
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
