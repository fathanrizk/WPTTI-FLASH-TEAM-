    <div class="container-fluid">
      <center>
        <h2 style="padding:1rem; border-bottom: 2px solid red;">Registrant Account Information</h2>
      </center>
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
              <th scope="col">Bukti Bayar</th>
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
                  <td>
                  <!-- Button trigger modal -->
                    <a data-toggle="modal" data-target="#exampleModal">
                      <?php echo $user->bukti ?>
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLabel" style="color:#fff;">Payment Receipt</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="col-md-12">
                                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/buktibayar/<?php echo $user->bukti;?>" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
                      </td>
                  <td><a class="btn btn-danger" href="<?= base_url('adminberanda/edit/').$user->id_registrasi;?>"><i class="fa fa-print"></i>Edit</a></td>
                  <td><a class="btn btn-warning" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');" href="<?= base_url('adminberanda/hapus/').$user->id_registrasi;?>"><i class="fa fa-print"></i>Hapus</a></td>
                </tr>
                <?php $no++; ?>
                <?php } ?>
          </tbody>
        </table>
      </div>
      <br>
      <br>
    </div>
