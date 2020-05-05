    <div class="container-fluid">
      <br>
      <img class="d-block w-25" style="float:right;" src="<?php echo base_url() ?>/assets/img/itera/alur.png" alt="">
      <div class="container2">
        <h3>Use your latest and valid data!</h3>
        <small class="text-danger">*if you're an ITERA students, field "NIM" and "Major" must be filled in!</small>
        <br>
         <?php echo form_open_multipart('userdaftartes'); ?>
            <input class="nik" type="hidden" size ="40" name="nik" value="<?= ($user['nik']);?>">
            
            <div class="data1">
                <p>Name </p>
                <input autofocus class="nama" type="text" size ="40" name="nama">
            </div>
            <small class="text-danger"><?= form_error('nama'); ?></small>
            <div class="data1">
              <p>Place & Date of Birth </p>
              <input class="ttl" type="text" size ="40" name="ttl">
            </div>
            <small class="text-danger"><?= form_error('ttl'); ?></small>
            <div class="data1">
                <p>NIM (Optional) </p>
                <input class="nim" type="text" size ="40" name="nim">
            </div>
            <div class="data1">
                <p>Major (Optional)  </p>
                <input class="prodi" type="text" size ="40" name="prodi">
            </div>
            <div class="data1">
                <p>Upload Photo (.jpg)</p>
                <input class="foto" type="file" name="foto">
            </div>
            <small class="text-danger"><?= form_error('foto'); ?></small>
            <input class="button1" type="submit" name="" value="Submit">
          <?php echo form_close(); ?>
      </div>
      <br>
      <br>
      <br>
    </div>
