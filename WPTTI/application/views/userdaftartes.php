    <div class="main">
      <h2>TOEFL Test Registration</h2>
      <div class="container">
        <p>Use your latest and valid data!</p>
         <?php echo form_open_multipart('userdaftartes'); ?>
            <div class="data1">
                <p>Name </p>
                <input class="nama" type="text" size ="40" name="nama"><br>
            </div>
            <div class="data1">
              <p>Place & Date of Birth </p>
              <input class="ttl" type="text" size ="40" name="ttl"><br>
            </div>
            <div class="data1">
                <p>NIM  </p>
                <input class="nim" type="text" size ="40" name="nim"><br>
            </div>
            <div class="data1">
                <p>Major (Optional)  </p>
                <input class="prodi" type="text" size ="40" name="prodi"><br>
            </div>
            <div class="data1">
                <p>Upload Photo  </p>
                <input class="foto" type="file" name="foto"><br>
            </div>
            <input class="button1" type="submit" name="" value="Submit">
          <?php echo form_close(); ?>
      </div>
      <br>
      <br>
    </div>
