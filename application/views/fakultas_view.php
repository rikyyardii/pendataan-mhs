<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Fakultas UMLA</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
</div>
  <div navbar-html="navbar.html"></div>
  <body>
    <div class="container mt-2">
      <h1><center>DATA FAKULTAS</center></h1>
      <h1><center>UNIVERSITAS MUHAMMADIYAH LAMONGAN</center></h1>
    <?php include "./modal/header.html" ?>
    <a href="<?php echo site_url('fakultas/add_new');?>" class="btn rounded-pill btn-primary mt-3">TAMBAH DATA FAKULTAS</a>
<table class="table table-striped mt-4">
    <div class="container mt-4">
    <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama Fakultas</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <?php
          $count = 0;
          foreach ($fakultas->result() as $row) :
            $count++;
        ?>
        <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo ($row->fakultas_name);?></td>
            <td>
                <a href="<?php echo site_url('fakultas/get_edit/'.$row->fakultas_id);?>" class="btn btn-sm btn-primary">Update</a>
                <a href="<?php echo site_url('fakultas/delete/'.$row->fakultas_id);?>" title="delete" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
          </td>
        </tr>
      <?php endforeach;?>

      <!-- load jquery js file -->
        <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
      <!-- load bootstrap js file -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>