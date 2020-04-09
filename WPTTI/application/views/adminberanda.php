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
          <li><a href="<?= base_url('index.php/login');?> " style="padding-right: 0.5rem;">Logout</a></li>
          <li><a href="<?= base_url('index.php/adminberanda');?> " style="padding-right: 0.5rem;">Homepage</a></li>
        </ul>
    </div>
    <div class="main">
      <h2>Registrant Account Information</h2>
      <form action= "" method="get">
        <input class="pencarian" type="text" name="keyword">
        <input class="button" type="submit" name="" value="cari"><br><br>
      </form>
      <br>
      <br>
      <!-- DISINI ISINYA LIST AKUN, FUNGSI HAPUS AKUN, INPUT SOCRE-->
      <div align="center" style="padding-bottom: 3rem; ">
        <table style="max-width: 90%;" class="table table-hover table-bordered table-secondary">
          <thead style="background-color: #b49040; text-align: center;">
            <tr >
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">NIM</th>
              <th scope="col">Place and Date Birth</th>
              <th scope="col">Major Field Study</th>
              <th scope="col">Registration Number</th>
              <th scope="col">Score</th>
              <th scope="col">Edit Data</th>
            </tr>
          </thead>
          <tbody style="text-align: center;">
            <tr>
              <th scope="row">1</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><a href="#">Edit</a></td>
              
            </tr>
            <tr>
              <th scope="row">2</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><a href="#">Edit</a></td>
              
            </tr>
            <tr>
              <th scope="row">3</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><a href="#">Edit</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
