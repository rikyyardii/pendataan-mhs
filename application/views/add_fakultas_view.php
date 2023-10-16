<html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Input Data Fakultas</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <div navbar-html="navbar.html"></div>
  <body>
    <div class="container mt-2">
      <h1><center>MASUKKAN DATA FAKULTAS</center></h1>
      <?php include "./modal/header.html" ?>
        <form action="<?php echo site_url('fakultas/save');?>" method="post">

        <div class="form-group mt-2">
            <label>Nama Fakultas</label>
            <input type="text" class="form-control" name="fakultas_name" placeholder=" Masukkan Nama Fakultas" required>
          </div>
    <div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    
    <!-- footer -->
    <?php include "./modal/footer.html" ?>
    <!-- end footer -->
    
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>