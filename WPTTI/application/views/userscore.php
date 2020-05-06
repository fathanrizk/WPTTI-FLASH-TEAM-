
<!-- Navigasi Bar-->
<nav class="navbar navbar-expand-lg navbar-dark" style="margin-left:2.9rem; margin-right:2.9rem;background-color:#daa520;">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userberanda');?>">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userprofile')?>">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userdaftartes')?>">Test Registration</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('userscore')?>">Score TOEFL <span class="sr-only">(current)</span></a>
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
  <br>
  <div class="cari">
    <?php echo form_open('userscore/search') ?>
      <input class="pencarian" type="text" name="keyword">
      <input class="button" type="submit" name="" value="Search">
    <?php echo form_close() ?>
  </div>
  <br>
  <br>
  <!-- DISINI ISINYA LIST AKUN-->
  <br>
  <div class="table-responsive-md" align="center" style="padding-bottom: 3rem; ">
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
        </tr>
      </thead>
      <tbody style="text-align: center;">
        <?php
            $no = 1;
            foreach ($data_user as $user) {
            ?>
            <?php  ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $user->nama; ?></td>
              <td><?php echo $user->ttl; ?></td>
              <td><?php echo $user->no_registrasi; ?></td>
              <td><?php echo $user->nim; ?></td>
              <td><?php echo $user->prodi; ?></td>
              <td><?php echo $user->score; ?></td>
            </tr>
            <?php $no++; ?>
            <?php } ?>
      </tbody>
    </table>
  </div>
  <br>
  <br>
</div>
