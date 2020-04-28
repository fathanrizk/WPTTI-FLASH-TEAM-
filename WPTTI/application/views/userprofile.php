    <div class="main">
      <h2><center>Your Profile</center></h2>
      <?php foreach ($join as $joins) { ?>
      <td><a class="btn btn-success" href="<?= base_url('userprofile/print/').$joins['nik'];?>"><i class="fa fa-print"></i>Print</a></td>
      <div class="card mb-3" style="max-width: 500px;">
        <div class="card-title"><h5 align="center" style="font-size:18px;">TOEFL EXAMINATION CARD</h5>
        <p align="center" style="font-size:12px;"><i>INSTITUT TEKNOLOGI SUMATERA</i></p></div>
        <div class="row no-gutters">
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text" style="font-size:12px;">Reg. Number &emsp;&emsp;&emsp;: <?= $joins['no_registrasi']; ?></p>
              <p class="card-text" style="font-size:12px;">NIK &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?= $joins['nik']; ?></p>
              <p class="card-text" style="font-size:12px;">Name &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  : <?= $joins['nama'];  ?></p>
              <p class="card-text" style="font-size:12px;">Date of Birth &emsp;&emsp;&emsp; : <?= $joins['ttl'];  ?></p>
              <p class="card-text" style="font-size:12px;">NIM (optional)&emsp;&emsp;&ensp; : <?= $joins['nim'];  ?></p>
              <p class="card-text" style="font-size:12px;">Major (optional)&emsp;&emsp;: <?= $joins['prodi'];  ?></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="<?php echo base_url(); ?>assets/foto/<?php echo $joins['foto'];?>"width="90" height="110">
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
