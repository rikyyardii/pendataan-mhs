<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Input Data Mahasiswa</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
 
    <div class="container mt-2">
      <h1><center>MASUKKAN DATA MAHASISWA</center></h1>
      <?php include "./modal/header.html" ?>
        <?php echo form_open_multipart('mahasiswa/save') ?>
          <div class="form-group mt-2">
            <label>Nama Mahasiswa</label>
            <input type="text" class="form-control" name="mhs_name" placeholder=" Masukkan Nama Mahasiswa" required>
          </div>
          <div class="form-group">
            <label>NIM</label>
            <input type="number" class="form-control" name="mhs_nim" placeholder="Masukkan NIM Mahasiswa" required>
          </div>

          <fieldset class="form-group">
          <div class="form-group">
            <legend class="col-form-label">JENIS KELAMIN</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name='mhs_jenkel' value='Laki-laki' required>
                <label class="form-check-label" for="gridRadios1">
                  Laki-laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name='mhs_jenkel' value='Perempuan' required>
                <label class="form-check-label" for="gridRadios2">
                  Perempuan
                </label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="mhs_email" placeholder="Masukkan Email Mahasiswa" required>
          </div>

          <div class="form-group">
          <label>Pilih Prodi</label>
          <select for="prodi" class="form-control" name="prodi_id">
              <option value="">- Pilih -</option>
              <?php foreach($prodi->result() as $key => $data) { ?>
                   <option value="<?=$data->prodi_id?>"><?=$data->prodi_name?></option>
              <?php } ?>
          </select>
          </div>

          <div class="form-group">
            <label>Upload Gambar</label>
            <input type="file" name="foto" class="form-control-file" accept=".jpg,.jpeg,.png">
          </div>

          <button type="submit" class="btn btn-primary">Tambah</button>
          
    <!-- footer -->
    <?php include "./modal/footer.html" ?>
    <!-- end footer -->

        <?php echo form_close() ?>
      </div>
    </div>

 
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>