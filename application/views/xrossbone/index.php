<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
  <title>Smart Village</title>

	<!-- Bootstrap core CSS-->
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-success static-top">

      <a class="navbar-brand mr-1" href="index.html">Smart Village</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url('admin/')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="#">Login</a>
            <a class="dropdown-item" href="#">Register</a>
            <a class="dropdown-item" href="#">Forgot Password</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-plus-square"></i>
            <span>Posyandu</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="far fa-id-card"></i>
            <span>Catatan Sipil</span></a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fab fa-searchengin"></i>
            <span>Monitoring</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-money-bill"></i>
            <span>Pendanaan Desa</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Iuran</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-child"></i>
            <span>Karang Taruna</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-comment-alt"></i>
            <span>Keluhan</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          
         <div class="jumbotron text-center">
			<h1>Selamat Datang Di Posyandu</h1>
			<img src="<?php echo base_url(); ?>assets/img/download 2.jpg" id="bg" alt="" style="position:absoluted; top:0; left:0; min-width:80%; min-height:50%;">
		</div>
	
	
	
		<section class="about" id="about">
			<div class="container">
				<div class="row">
					<div class=col-sm-12">
						<h2 class="text-center">Pengertian Posyandu</h2>
						<hr>
					</div>
				</div>
				
				
				<div class="row>
					<div class="col-lg-5">
						<p>Posyandu merupakan salah satu bentuk Upaya Kesehatan Berbasis Masyarakat (UKBM) yang dikelola dan diselenggarakan dari, oleh, untuk dan bersama masyarakat dalam penyelenggaraan pembangunan. kesehatan guna memberdayakan masyarakat dan memberikan kemudahan kepada masyarakat dalam memperoleh pelayanan kesehatan dasar/sosial dasar untuk mempercepat penurunan Angka Kematian Ibu dan Angka Kematian Bayi.
						
						Posyandu yang terintegrasi adalah kegiatan peayanan sosial dasar keluarga dalam aspek pemantauan tumbuh kembang anak.Dalam pelaksanaannya dilakukan secara koordinatif dan integratif serta saling memperkuat antar program dan kegiatan untuk kelangsungan pelayanan di posyandu sesuai dengan situasi/kebutuhan lokal yang dalam kegiatannya tetap memperhatikan aspek pemberdayaan masyarakat.
						
						Posyandu merupakan wadah pemberdayaan masyarakat yang di bentuk melalui musyawarah mufakat di desa/kelurahan dan dikelola oleh Pengelola Posyandu, yang dilakukan dengan keputusan kepala desa/lurah.</p>
					</div>
				</div>
			</div>
		</section>
  <?php $this->load->view($content); ?>
  

			</div>

        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright TI-40-10</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo site_url('admin/login/logout/')?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">×</span>
        			</button>
      			</div>
      			<div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      			<div class="modal-footer">
        			<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        			<a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      			</div>
    		</div>
  		</div>
	</div>
	

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
	<!-- Page level plugin JavaScript-->
	<script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
	<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>
	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
	<!-- Demo scripts for this page-->
	<script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
	<script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>
	<script>
	function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
	}
</script>
	

  </body>

</html>