<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit Data</title>
    <!-- load bootstrap css file -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  </head>
</div>
  <body>
    <div class="container mt-2">
      <h1><center>EDIT DATA MAHASISWA</center></h1>
    <!-- header -->
    <?php include "./modal/header.html" ?>
    <!-- end header -->
    <body>
        <div class="col-md-6 offset-md-3 mt-4">
        <form action="<?php echo site_url('mahasiswa/update');?>" method="post">
          <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" class="form-control" name="mhs_name" value="<?php echo $mhs_name;?>" required>
          </div>
          <div class="form-group">
            <label>NIM</label>
            <input type="number" class="form-control" name="mhs_nim" value="<?php echo $mhs_nim;?>" required>
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
            <input type="email" class="form-control" name="mhs_email" value="<?php echo $mhs_email;?>" placeholder="Masukkan Email Mahasiswa" required>
          </div>

          <div class="form-group">
            <label>Prodi id</label>
            <input type="number" class="form-control" name="prodi_id" value="<?php echo $prodi_id;?>" placeholder="Masukkan Email Mahasiswa" required>
          </div>


          <div class="card text text-danger">
            <div class="card-header">
              * ID Prodi Universitas Muhammadiyah Lamongan
            </div>
            <div class="card-body text-dark">
              <p class="card-text">S1 Teknik Komputer : 38</p>
              <p class="card-text">S1 PGSD : 39</p>
              <p class="card-text">S1 KEPERAWATAN : 40</p>
              <p class="card-text">S1 FARMASI : 41</p>
              <p class="card-text">S1 ILMU HADIST : 42</p>
              <p class="card-text">D3 KEBIDANAN : 43</p>
              <p class="card-text">S1 EKONOMI SYARIAH : 44</p>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>

    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>