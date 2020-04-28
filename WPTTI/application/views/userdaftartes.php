    <div class="main">
      <h2>TOEFL Test Registration</h2>
      <div class="container">
        <h3>Use your latest and valid data!</h3>
        <small class="text-danger">*if you're an ITERA students, field "NIM" and "Major" must be filled in!</small>
        <br>
         <?php echo form_open_multipart('userdaftartes'); ?>
            <div class="data1">
                <p>NIK </p><input class="nik" type="text" size ="40" name="nik" value="<?= ($user['nik']);?>">
            </div>
            <div class="data1">
                <p>Name </p>
                <input class="nama" type="text" size ="40" name="nama">
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
    </div>
