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
            <li><a href="<?php echo site_url('userberanda/logout')?>" style="padding-right: 0.5rem;">Logout</a></li>
            <li><a href="<?= base_url('userkontak');?>" style="padding-right: 0.5rem;">Contact Information</a></li>
            <li><a href="<?= base_url('userscore');?>" style="padding-right: 0.5rem;">Score TOEFL</a></li>
            <li><a href="<?= base_url('userdaftartes');?>" style="padding-right: 0.5rem;">Test Registration</a></li>
            <li><a href="<?= base_url('userprofile');?>" style="padding-right: 0.5rem;">Profile</a></li>
            <li><a href="<?= base_url('userberanda');?>" style="padding-right: 0.5rem;">Homepage</a></li>
          </ul>
      </div>
    </header>
    <div class="main">
      <h2>TOEFL Test Registration</h2>
      <div class="container">
        <p>Use your latest and valid data!</p>
         <?php echo form_open_multipart('userdaftartes'); ?>
            <div class="data">
                <p>Name :</p>
                <input type="text" size ="25" name="nama"><br>
            </div>
            <div class="data">
              <p>Place & Date of Birth :</p>
              <input type="text" size ="25" name="ttl"><br>
            </div>
            <div class="data">
                <p>NIM :                    </p>
                <input type="text" size ="25" name="nim"><br>
            </div>
            <div class="data">
                <p>Major (Optional) : </p>
                <input type="text" size ="25" name="prodi"><br>
            </div>
            <div class="data">
                <p>Upload Photo : </p>
                <input type="file" name="foto"><br>
            </div>
            <input class="button" type="submit" name="" value="Submit">
          <?php echo form_close(); ?>
      </div>
    </div>
  </body>
</html>
