<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/print.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/print.css" type="text/css" media="print">
    <title>TOEFL | Intitut Teknologi Sumatera</title>
  </head>
  <body onload="print()">
    <div class="cetak">
    <?php foreach ($join as $joins) { ?>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="card-title"><h5 align="center" style="font-size:18px;">TOEFL EXAMINATION CARD</h5>
      <p align="center" style="font-size:12px;"><i>INSTITUT TEKNOLOGI SUMATERA</i></p></div>
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="card-body">
            <p class="card-text" style="font-size:12px;">Reg. Number&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?= $joins['no_registrasi']; ?></p>
          <p class="card-text" style="font-size:12px;">NIK&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?= $joins['nik']; ?></p>
          <p class="card-text" style="font-size:12px;">Name&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  : <?= $joins['nama'];  ?></p>
          <p class="card-text" style="font-size:12px;">Place & Date of Birth  &emsp;  &emsp; : <?= $joins['ttl'];  ?></p>
          <p class="card-text" style="font-size:12px;">NIM (optional)  &emsp; &emsp; &emsp;&emsp;&ensp; : <?= $joins['nim'];  ?></p>
          <p class="card-text" style="font-size:12px;">Major (optional)&emsp; &emsp; &emsp; &emsp;: <?= $joins['prodi'];  ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <img src="<?php echo base_url(); ?>assets/foto/<?php echo $joins['foto'];?>"width="90" height="110">
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
  </body>
</html>
