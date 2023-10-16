<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prodi UMLA</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
 
  <div class="container mt-2">
      <h1><center>DATA PROGRAM STUDI</center></h1>
      <h1><center>UNIVERSITAS MUHAMMADIYAH LAMONGAN</center></h1>
      <?php include "./modal/header.html" ?>
      <a href="<?php echo site_url('prodi/add_new');?>" class="btn rounded-pill btn-primary mt-3">TAMBAH DATA PROGRAM STUDI</a>
        <form action="<?php echo site_url('prodi/save');?>" method="post">

    <table class="table table-striped mt-4">
    <div class="container mt-4">
    <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Program Studi</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <?php
          $count = 0;
          foreach ($prodi->result() as $row) :
            $count++;
        ?>
        <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo ($row->prodi_name);?></td>
            <td>
                <a href="<?php echo site_url('prodi/get_edit/'.$row->prodi_id);?>" class="btn btn-sm btn-primary">Update</a>
                <a href="<?php echo site_url('prodi/delete/'.$row->prodi_id);?>" title="delete" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
            <td>
        </tr>
      <?php endforeach;?>

      <!-- load jquery js file -->
      <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
      <!-- load bootstrap js file -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
      </tbody>
    </table>
   </div>
</html>