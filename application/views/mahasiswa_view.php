<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mahasiswa UMLA</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
</div>

    <!-- tampilan -->
     <div class="container mt-3">
        <h1><center>DATA MAHASISWA</center></h1>
        <h1><center>UNIVERSITAS MUHAMMADIYAH LAMONGAN</center></h1>
      <table class="table table-striped mt-4">
      <div class="container mt-4">

      <!-- Navbar -->
      <?php include "./modal/header.html" ?>
		  <!-- /.navbar -->

      <a href="<?php echo site_url('mahasiswa/add_new');?>" class="btn rounded-pill btn-primary mt-3">TAMBAH DATA MAHASISWA</a>
      <a href="<?php echo site_url('/import');?>" class="btn rounded-pill btn-success mt-3">IMPORT DATA EXCEL</a>
      <a href="<?php echo site_url('mahasiswa/print');?>" class="btn rounded-pill btn-secondary mt-3">CETAK SEMUA DATA</a>
      </div>

      <div class="col mt-2">
          <?= $this->session->flashdata('pesan'); ?>
      </div>
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">NIM</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Email</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <?php
          $count = 0;
          foreach ($mahasiswa->result() as $row) :
            $count++;
        ?>
          <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo $row->mhs_name;?></td>
            <td><?php echo ($row->mhs_nim);?></td>
            <td><?php echo $row->mhs_jenkel;?></td>
            <td><?php echo $row->mhs_email;?></td>
            <td><?php echo $row->fakultas_name;?></td>
            <td><?php echo $row->prodi_name;?></td>
            <td>
                <a href="<?php echo site_url('mahasiswa/cetak_mhs/'.$row->mhs_id);?>" class="btn btn-sm btn-secondary">Cetak Data</a>
                <a href="<?php echo site_url('mahasiswa/get_edit/'.$row->mhs_id);?>" class="btn btn-sm btn-primary">Update</a>
                <a href="<?php echo site_url('mahasiswa/delete/'.$row->mhs_id);?>" title="delete" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    <!-- end tampilan -->

    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>