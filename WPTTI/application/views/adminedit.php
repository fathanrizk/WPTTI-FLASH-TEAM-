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
          <li><a href="<?= base_url('login');?> " style="padding-right: 0.5rem;">Logout</a></li>
          <li><a href="<?= base_url('adminberanda');?> " style="padding-right: 0.5rem;">Homepage</a></li>
        </ul>
    </div>
    <div class="main">
      <h2>Registrant Account Information</h2>
      <br>
      <br>
      <!-- DISINI ISINYA LIST AKUN, FUNGSI HAPUS AKUN, INPUT SOCRE-->

      <div align="center" style="padding-bottom: 3rem; ">
        <table style="max-width: 90%;" class="table table-hover table-bordered table-secondary">
          <thead style="background-color: #b49040; text-align: center;">
            <tr >
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Place and Date Birth</th>
              <th scope="col">Registration Number</th>
              <th scope="col">NIM</th>
              <th scope="col">Major Field Study</th>
              <th scope="col">Score</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody style="text-align: center;">
            <?php echo form_open('adminberanda/fungsiedit'); ?>
            <?php foreach ($data_user as $user) {?>
                <tr>
                  <td>1</td>
                  <td><?php echo $user->nama; ?></td>
                  <td><?php echo $user->ttl; ?></td>
                  <td><input type="text" name="no_registrasi" value="<?php echo $user->no_registrasi; ?>"></td>
                  <td><?php echo $user->nim; ?></td>
                  <td><?php echo $user->prodi; ?></td>
                  <td><input type="text" name="score" value="<?= $user->score  ?>"></td>
                  <input type="hidden" name="id_user" value="<?php echo $user->id_user; ?>">
                  <td><input type="submit" name="" value="Simpan"></td> <!--<a class="btn btn-danger"><i class="fa fa-print" type="submit"></i>Simpan</a></td>-->
                </tr>
                <?php } ?>
            <?php echo form_close() ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
