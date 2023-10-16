<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- load bootstrap css file -->
     <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <title>Import Data Excel</title>
  </head>
  <!-- tampilan -->
  <div class="container mt-3">
        <h1><center>MASUKKAN DATA MAHASISWA</center></h1>
        <h1><center>UNIVERSITAS MUHAMMADIYAH LAMONGAN</center></h1>
      <table class="table table-striped mt-4">
      <div class="container mt-4">
      <?php include "./modal/header.html" ?>
      <?= $this->session->flashdata('pesan_error'); ?>
  <body>
    <div class="container">
        <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <?= form_open_multipart('import/uploaddata') ?>
                    <div class="form-row">
                        <div class="col-4">
                        <input type="file" class="form-control-file" id="importexcel" name="importexcel" accept=".xlsx,.xls">
                        </div>
                        <div class="col">
                        <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                <?= form_close(); ?> 
                </div>
            </div>
                    <div class="card-body">
                      <h5 class="card-title text-danger">*</h5> <h5 class="card-title">Catatan</h5>
                      <p class="card-text">Data yang diupload harus berekstensi .xlsx atau .xls</p>
                    </div>
                  </div>
        </div>
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