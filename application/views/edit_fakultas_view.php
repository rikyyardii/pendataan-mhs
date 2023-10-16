<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit Data Fakultas</title>
    <!-- load bootstrap css file -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  </head>
</div>
  <body>
    <div class="container mt-2">
      <h1><center>EDIT DATA FAKULTAS</center></h1>
    <!-- header -->
    <?php include "./modal/header.html" ?>
    <!-- end header -->
        <div class="col-md">
        <form action="<?php echo site_url('fakultas/update');?>" method="post">
          <div class="form-group">
            <input type="hidden" class="form-control" name="fakultas_id" value="<?php echo $fakultas_id;?>" required>
          </div>
          <div class="form-group">
            <label>Nama Fakultas</label>
            <input type="text" class="form-control" name="fakultas_name" value="<?php echo $fakultas_name;?>" required>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>

    <!-- footer -->
    <?php include "./modal/footer.html" ?>
    <!-- end footer -->

    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>