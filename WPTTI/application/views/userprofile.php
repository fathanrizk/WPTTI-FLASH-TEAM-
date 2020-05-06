
<!-- Navigasi Bar-->
<nav class="navbar navbar-expand-lg navbar-dark" style="margin-left:2.9rem; margin-right:2.9rem;background-color:#daa520;">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userberanda');?>">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('userprofile')?>">Profile  <span class="sr-only">(current)</span></a>
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
  <br>
  <h2><center>Your Profile</center></h2>
  <?php foreach ($join as $joins) { ?>
  <td><a class="btn btn-success" style="margin-left:23%; margin-top:1rem;"href="<?= base_url('userprofile/print/').$joins['nik'];?>"><i class="fa fa-print"></i>Print</a></td>
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
