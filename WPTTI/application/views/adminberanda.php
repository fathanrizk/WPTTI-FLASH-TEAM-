    <div class="main">
      <h2>Registrant Account Information</h2>
      <div class="cari">
        <?php echo form_open('Adminberanda/search') ?>
          <input class="pencarian" type="text" name="keyword">
          <input class="button" type="submit" name="" value="Search">
        <?php echo form_close() ?>
      </div>
      <br>
      <br>
      <center><a class="btn btn-success" href="<?= base_url('adminberanda/eksport_excel')?>">Export Excel</a></center>
      <!-- DISINI ISINYA LIST AKUN, FUNGSI HAPUS AKUN, INPUT SOCRE-->
      <br>
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
              <th scope="col">bukti bayar</th>
              <th scope="col" colspan="2">Edit Data</th>
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
                  <td><img src="<?php echo base_url(); ?>assets/buktibayar/<?php echo ['bukti'];?>"width="90" height="110"></td>
                  <td><a class="btn btn-danger" href="<?= base_url('adminberanda/edit/').$user->id_registrasi;?>"><i class="fa fa-print"></i>Edit</a></td>
                  <td><a class="btn btn-warning" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');" href="<?= base_url('adminberanda/hapus/').$user->id_registrasi;?>"><i class="fa fa-print"></i>Hapus</a></td>
                </tr>
                <?php $no++; ?>
                <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <tr></tr>
