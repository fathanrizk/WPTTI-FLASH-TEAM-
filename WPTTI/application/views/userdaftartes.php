
<!-- Navigasi Bar-->
<nav class="navbar navbar-expand-lg navbar-dark" style="margin-left:2.9rem; margin-right:2.9rem;background-color:#daa520;">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userberanda');?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userprofile')?>">Profile</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('userdaftartes')?>">Test Registration <span class="sr-only">(current)</span></a>
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
  <br>
  <img class="d-block w-25" style="float:right;" src="<?php echo base_url() ?>/assets/img/itera/alur.png" alt="">
  <div class="container2">
    <h3>Use your latest and valid data!</h3>
    <small class="text-danger">*if you're an ITERA students, field "NIM" and "Major" must be filled in!</small>
    <br>
     <?php echo form_open_multipart('userdaftartes'); ?>
        <input class="nik" type="hidden" size ="40" name="nik" value="<?= ($user['nik']);?>">

        <div class="data1">
            <p>Name </p>
            <input autofocus class="nama" type="text" size ="40" name="nama">
        </div>
        <small class="text-danger"><?= form_error('nama'); ?></small>
        <div class="data1">
          <p>Place & Date of Birth </p>
          <input class="ttl" type="text" size ="40" name="ttl">
        </div>
        <small class="text-danger"><?= form_error('ttl'); ?></small>
        <div class="data1">
            <p>NIM (Optional) </p>
            <input class="nim" type="text" size ="40" name="nim">
        </div>
        <div class="data1">
            <p>Major (Optional)  </p>
            <input class="prodi" type="text" size ="40" name="prodi">
        </div>
        <div class="data1">
            <p>Upload Photo (.jpg)</p>
            <input class="foto" type="file" name="foto">
        </div>
        <small class="text-danger"><?= form_error('foto'); ?></small>
        <input class="button1" type="submit" name="" value="Submit">
      <?php echo form_close(); ?>
  </div>
  <br>
  <br>
  <br>
</div>
