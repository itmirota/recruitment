<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Pencatatan Inventaris kepemilikan mirota ksm">
	<meta name="author" content="Tri Cahya">
	<!-- <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"> -->
  <link rel="icon" type="image/x-icon" href="<?= base_url().'assets/dist/images/favicon.png'?>">

	<link rel="preconnect" href="https://fonts.gstatic.com">

  <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="<?= base_url('assets/dist/img/favicon.png')?>" />

	<title><?= $pageTitle ?></title>

  <!-- Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

	<!-- FontAwesome -->
	<script src="https://kit.fontawesome.com/2edfabd55a.js" crossorigin="anonymous"></script>

  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.dataTables.net/1.13.6/css/dataTables.bootstrap5.min.css">

  <!-- Adminkit -->
	<link href="<?= base_url(); ?>assets/adminkit/css/app.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/adminkit/css/style.css" rel="stylesheet">
  
  <!-- FullCalendar -->
  <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
  
  <!-- SELECT2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!-- LEAFLET -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  
  <!-- CHART.JS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

  <style>
    #load{
      width: 100%;
      height: 100%;
      position: fixed;
      text-indent: 100%;
      background: rgba(255,255,255) url('./assets/images/loader.gif') no-repeat center;
      z-index: 1;
      opacity: 0.8;
    }

    .text-secondary-modal{
    font-size:10px;
    margin:0;
    }
    
  </style>
  
</head>

  <!-- <body class="sidebar-mini skin-black-light"> -->
<body>
<div id="load"></div>
<div class="wrapper">
  <nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
      <a class="sidebar-brand" href="index.html">
        <span class="align-middle">Recruitment Mirota</span>
      </a>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-nav">
        <li class="sidebar-header">
          Menu
        </li>
        <li class="sidebar-item">
          <a href="<?php echo base_url('/dashboard');?>" class="sidebar-link">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
          </a>
        </li>

        <li class="sidebar-item">
          <a href="<?php echo base_url('list-pelamar');?>" class="sidebar-link">
            <i class="fa fa-user"></i> <span>Data Pelamar</span></i>
          </a>
        </li>

        <li class="sidebar-item">
          <a href="<?php echo base_url('/list-lowongan');?>" class="sidebar-link">
            <i class="fa-solid fa-file-lines"></i> <span>Data Lowongan</span></i>
          </a>
        </li>

        <li class="sidebar-item">
          <a href="<?php echo base_url('/list-faq');?>" class="sidebar-link">
            <i class="fa-solid fa-file-lines"></i> <span>List FAQ</span></i>
          </a>
        </li>

        <!-- PSIKOTES -->
        <li class="sidebar-item has-submenu">
          <a class="sidebar-link" href="#"><i class="fa-solid fa-database"></i> Psikotes <i class="fa fa-angle-down" style="float: right;"></i> </a>
          <ul class="submenu collapse">
            <!-- MENU DEPARTEMENT -->
            <li class="sidebar-item">
              <a href="<?php echo base_url('soal-psikotes'); ?>" class="sidebar-link">
                <i class="fa-solid fa-file-lines"></i>
                <span>Soal</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?php echo base_url('ujian-psikotes'); ?>" class="sidebar-link">
                <i class="fa-solid fa-file-lines"></i>
                <span>Data Ujian</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?php echo base_url('hasil-psikotes'); ?>" class="sidebar-link">
                <i class="fa-solid fa-list-check"></i>
                <span>Hasil Ujian</span>
              </a>
            </li>
            <!-- MENU PEGAWAI -->
            <!-- <li class="sidebar-item has-submenu">
              <a class="sidebar-link" href="#"><i class="fa-solid fa-users"></i> Data Karyawan <i class="fa fa-angle-down" style="float: right;"></i> </a>
              <ul class="submenu collapse">
                <li class="sidebar-item">
                  <a href="<?php echo base_url('Datapegawai'); ?>" class="sidebar-link">
                    <span>Karyawan Aktif</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="<?php echo base_url('Datapegawainonaktif'); ?>" class="sidebar-link">
                    <span>Karyawan Tidak Aktif</span>
                  </a>
                </li>
              </ul>
            </li> -->
          </ul>
        </li>
        <!-- PSIKOTES -->

        <!-- <li class="sidebar-item">
          <a href="<?php echo base_url('user/export_xml');?>" class="sidebar-link">
            <i class="fa fa-user"></i> <span>Export</span></i>
          </a>
        </li> -->


        <li class="sidebar-header">
          User Management
        </li>
        <li class="sidebar-item">
          <a href="<?php echo base_url('list-user'); ?>" class="sidebar-link">
            <i class="fa fa-users"></i>
            <span>Users</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="main">
    <nav class="navbar navbar-expand navbar-light navbar-bg">
      <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
      </a>
      <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
          <!-- <li class="nav-item dropdown">
            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
              <div class="position-relative">
                <i class="align-middle" data-feather="bell"></i>
                <span class="indicator" id="indicator"></span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
              <div class="dropdown-menu-header" id="indicator-header">
              </div>
              <div class="list-group">
                <a href="<?php base_url(); ?>kerusakanBarang" class="list-group-item" onclick="bacaNotifBarang()">
                  <div class="row g-0 align-items-center">
                    <div class="col-2">
                      <i class="text-danger" data-feather="alert-circle"></i>
                    </div>
                    <div class="col-10">
                      <div class="text-dark">Laporan Kerusakan Barang</div>
                      <div class="text-muted small mt-1" id="indicator-barang"></div>
                    </div>
                  </div>
                </a>

                <a href="<?php base_url();?>kerusakanRuangan" class="list-group-item" onclick="bacaNotifRuangan()">
                  <div class="row g-0 align-items-center">
                    <div class="col-2">
                      <i class="text-danger" data-feather="alert-circle"></i>
                    </div>
                    <div class="col-10">
                      <div class="text-dark">Laporan Kerusakan Ruangan</div>
                      <div class="text-muted small mt-1" id="indicator-ruangan"></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="dropdown-menu-footer">
                <a href="#" class="text-muted">Show all notifications</a>
              </div>
            </div>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
              <i class="align-middle" data-feather="settings"></i>
            </a>

            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <span class="text-dark"><?= $nama_lengkap ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <!-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
              <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
              <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
              <div class="dropdown-divider"></div> -->
              <a class="dropdown-item" href="<?= base_url('logout')?>">Log out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <main class="content">
      <div class="container-fluid p-0">

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){

		document.querySelectorAll('.sidebar .sidebar-link').forEach(function(element){

			element.addEventListener('click', function (e) {

				let nextEl = element.nextElementSibling;
				let parentEl  = element.parentElement;	

				if(nextEl) {
					e.preventDefault();	
					let mycollapse = new bootstrap.Collapse(nextEl);

			  		if(nextEl.classList.contains('show')){
			  			mycollapse.hide();
			  		} else {
			  			mycollapse.show();
			  			// find other submenus with class=show
			  			var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
			  			// if it exists, then close all of them
						if(opened_submenu){
							new bootstrap.Collapse(opened_submenu);
						}

			  		}
		  		}

			});
		})

	}); 
	// DOMContentLoaded  end
</script>
