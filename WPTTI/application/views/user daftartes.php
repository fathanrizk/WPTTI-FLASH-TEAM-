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
            <li><a href="#" style="padding-right: 0.5rem;">Logout</a></li>
            <li><a href="#" style="padding-right: 0.5rem;">Informasi Kontak</a></li>
            <li><a href="#" style="padding-right: 0.5rem;">Score TOEFL</a></li>
            <li><a href="#" style="padding-right: 0.5rem;">Daftar Test</a></li>
            <li><a href="#" style="padding-right: 0.5rem;">Profile</a></li>
            <li><a href="#" style="padding-right: 0.5rem;">Beranda</a></li>
          </ul>
      </div>
    </header>
    <div class="main">
      <h2>Daftar Test TOEFL</h2>
      <div class="container">
        <p>Gunakan data terbaru anda dan pastikan valid!</p>
          <form class="datadaftar" action="index.html" method="post">
            <div class="data">
                <p>Name :</p>
                <input type="text" name=""><br>
            </div>
            <div class="data">
              <p>Place & Date of Birth :</p>
              <input type="text" name=""><br>
            </div>
            <div class="data">
                <p>Registration Number : </p>
                <input type="text" name=""><br>
            </div>
            <div class="data">
                <p>NIM : </p>
                <input type="text" name=""><br>
            </div>
            <div class="data">
                <p>Major (Optional) : </p>
                <input type="text" name=""><br>
            </div>
          </form>
      </div>
    </div>
  </body>
</html>