<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Input Data Prodi</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
 
    <div class="container mt-2">
      <h1><center>MASUKKAN DATA PROGRAM STUDI</center></h1>
      <?php include "./modal/header.html" ?>
        <form action="<?php echo site_url('prodi/save');?>" method="post">

        <div class="form-group mt-2">
          <label>Pilih Fakultas</label>
          <select for="prodi" class="form-control" name="fakultas_id" required>
              <option value="">- Pilih -</option>
              <?php foreach($fakultas->result() as $key => $data) { ?>
                   <option value="<?=$data->fakultas_id?>"><?=$data->fakultas_name?></option>
              <?php } ?>
          </select>
          </div>

          <div class="form-group">
            <label>Nama Prodi</label>
            <input type="text" class="form-control" name="prodi_name" placeholder="Masukkan Nama Program Studi" required>
          </div>
          <div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
        </form>

      <!-- footer -->
      <?php include "./modal/footer.html" ?>
      <!-- end footer -->

      <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>