<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <!-- load bootstrap css file -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  </head>
  <body>
</div>

    <!-- tampilan -->
     <div class="container mt-3">
        <h1><center>SELAMAT DATANG DI PUSAT DATA</center></h1>
        <h1><center>UNIVERSITAS MUHAMMADIYAH LAMONGAN</center></h1>
      <table class="table table-striped mt-4">
      <div class="container mt-4"> 
    
    <!-- navbar -->
    <nav class="navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"
						><i class="fas fa-bars"></i
					></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
          <a class="navbar-brand" href="#">Dashboard</a>
				</li>
				<li class="nav-item dropdown">
					<a
						class="nav-link dropdown-toggle"
						href="#"
						id="navbarDropdown2"
						role="button"
						data-toggle="dropdown"
						aria-haspopup="true"
						aria-expanded="false"
					>
						Master Data
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
						<a class="dropdown-item" href="/project/mahasiswa"
							>Data Mahasiswa</a
						>
						<a class="dropdown-item" href="/project/fakultas">Data Fakultas</a>
						<a class="dropdown-item" href="/project/prodi"
							>Data Program Studi</a
						>
					</div>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/project/about" class="nav-link">About</a>
                    </li>
				</li>

        <li class="nav-item nav-right d-none d-sm-inline-block">
					<a href="/project/login/logout" class="nav-link">Logout</a>
				</li>

			</ul>
		</nav>
    <!-- end navbar -->

    <!-- tampilan -->
    <div class="row mt-5 center">
      <div class="col-lg-3 col-6 mt-6">

              <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $jumlah_mhs ?></h3>
              <p>Jumlah Mahasiswa</p>
              </div>
              <div class="icon">
              <i class="ion ion-bag"></i>
              </div>
              </div>
              </div>

              <div class="col-lg-3 col-6">

              <div class="small-box bg-success">
              <div class="inner">
              <h3><?php echo $jumlah_fakultas ?></sup></h3>
              <p>Jumlah Fakultas</p>
              </div>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
              </div>
              </div>
              </div>

              <div class="col-lg-3 col-6">

              <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php echo $jumlah_prodi ?></h3>
              <p>Data Program Studi</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
              </div>
              </div>
              </div>

      <div class="card mt-4">
        <div class="card-header">
        Today's Quotes
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>You can't change what happened. But you can still change what will happen.</p>
            <footer class="blockquote-footer"><cite title="Source Title">Sebastian Vettel</cite></footer>
          </blockquote>
        </div>
      </div>
    <!-- end tampilan -->
 
    <!-- footer -->
    <?php include "./modal/footer.html" ?>
    <!-- end footer -->

    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>