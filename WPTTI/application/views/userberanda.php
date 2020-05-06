
<!-- Navigasi Bar-->
<nav class="navbar navbar-expand-lg navbar-dark" style="margin-left:2.9rem; margin-right:2.9rem;background-color:#daa520;">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('userberanda');?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userprofile')?>">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userdaftartes')?>">Test Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userscore')?>">Score TOEFL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userkontak');?>">Contact Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login/logout')?>">Logout</a>
      </li>
  </div>
</nav>

<!-- container isi-->

<div class="container-fluid">
  <center>
    <h2 style="padding:1rem; border-bottom: 2px solid red;">ITERA TOEFL TEST REGISTRATION</h2>
    <p style="margin-left: 1rem;">
      "We provide some courses for specific purpose, like conversation in English and TOEFL<br>
      Preparation. We also provide some courses focused on improving your speaking, writing, <br>
      listening and reading skills."
    </p>
  </center>

  <a style="text-decoration: none;" href="<?= base_url('userdaftartes');?>">
  <button type="button" class="btn btn-lg btn-primary" style="margin-left:auto; margin-right:auto; display: block;">Register Now !
  </button>
  </a>

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
  <br>
</div>
