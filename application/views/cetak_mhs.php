<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mahasiswa UMLA</title>
    <!-- load bootstrap css file -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css"
  </head>
<body>
      <div class="content-wraper">
        <div class="card-body">
          <h3><strong>UNIVERSITAS MUHAMMADIYAH LAMONGAN</strong></h3>
          <p>JL.RAYA PLALANGAN KM 3 PLOSOWAHYU LAMONGAN LAMONGAN JAWA TIMUR</p>
          <p>Email : info@umla.ac.id      Website : http://umla.ac.id</p>
        </div>

      <h4><strong><center>DATA MAHASISWA</center></strong></h4>
      <h4><strong><center>UNIVERSITAS MUHAMMADIYAH LAMONGAN</center></strong></h4>
        <table class="table table-striped table-bordered mt-3">
          <tr>
            <th>Nama Lengkap</th>
              <td><?php echo $cetak->mhs_name?></td>
          </tr>
          <tr>
            <th>NIM</th>
              <td><?php echo $cetak->mhs_nim?></td>
          </tr>
          <tr>
            <th>Jenis Kelamin</th>
              <td><?php echo $cetak->mhs_jenkel?></td>
          </tr>
          <tr>
            <th>Email</th>
              <td><?php echo $cetak->mhs_email?></td>
          </tr>
          <tr>
            <th>Prodi</th>
              <td><?php echo $cetak->prodi_id?></td>
          </tr>
        </table>

        <div class="card text bg-light text-danger mt-4">
            <div class="card-header">
              * ID Prodi Universitas Muhammadiyah Lamongan
            </div>
            <div class="card-body text-dark">
              <p class="card-text">S1 Teknik Komputer : 38 (FSTP)</p>
              <p class="card-text">S1 PGSD : 39 (FSTP)</p>
              <p class="card-text">S1 KEPERAWATAN : 40 (KESEHATAN)</p>
              <p class="card-text">S1 FARMASI : 41 (KESEHATAN)</p>
              <p class="card-text">S1 ILMU HADIST : 42 (KEISLAMAN)</p>
              <p class="card-text">D3 KEBIDANAN : 43 (KESEHATAN)</p>
              <p class="card-text">S1 EKONOMI SYARIAH : 44 (FEB)</p>
            </div>
          </div>

        <script type="text/javascript">
          window.print();
      </script>

    </section>
  </div>



    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>