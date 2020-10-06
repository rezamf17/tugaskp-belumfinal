<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Halaman Kelola Data</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">
   <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-green sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">

      <header class="main-header">
         <!-- Logo -->
         <a href="<?= base_url('dashboard') ?>" class=" logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>SMK CLHA'49 RANCAEKEK</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>SMK CLHA'49 RANCAEKEK</span>
         </a>
         <!-- Header Navbar: style can be found in header.less -->
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
               <ul class="nav navbar-nav">
                  <li class="dropdown tasks-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                           <ul class="menu">
                              <li>
                                 <a href="#">
                                    <h3>
                                       Design some buttons
                                       <small class="pull-right">50%</small>
                                    </h3>
                                    <div class="progress xs">
                                       <div class="progress-bar progress-bar-aqua" style="width: 50%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                          <span class="sr-only">50% Complete</span>
                                       </div>
                                    </div>
                                 </a>
                              </li>
                              <!-- end task item -->
                           </ul>
                        </li>
                        <li class="footer">
                           <a href="#">View all tasks</a>
                        </li>
                     </ul>
                  </li>
                  <!-- User Account  -->
                  <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url() ?>assets/dist/img/orang-tua.png" class="user-image" alt="User Image">
                        <span class="hidden-xs"></span>
                     </a>
                     <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                           <img src="<?= base_url() ?>assets/dist/img/orang-tua.png" class="img-circle" alt="User Image">
                           <p>
                              <?= $this->fungsi->user_login()->name ?>
                              <small><?= $this->fungsi->user_login()->alamat?></small>
                           </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                           <div class="pull-left">
                              <a href="#" class="btn btn-default btn-flat">Profile</a>
                           </div>
                           <div class="pull-right">
                              <a href="<?php echo base_url() . 'auth/logout' ?>" class="btn btn-default btn-flat">Sign out</a>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>


      <!-- Left side column -->
      <aside class="main-sidebar">
         <section class="sidebar">
            <div class="user-panel">
               <div class="pull-left image">
                  <img src="<?= base_url() ?>assets/dist/img/orang-tua.png" class="img-circle" alt="User Image">
               </div>
               <div class="pull-left info">
                  <p><?= ucfirst($this->fungsi->user_login()->username)  ?></p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
               </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
               <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                     </button>
                  </span>
               </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
               <li class="header">MAIN NAVIGATION</li>
               <li <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                  <a href="<?= site_url('dashboard') ?>">
                     <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                  </a>
               </li>
               <?php if ($this->fungsi->user_login()->level == 1) { ?>
                  <li <?= $this->uri->segment(1) == 'kategori' ? 'class="active"' : '' ?>>
                     <a href="<?= site_url('user') ?>">
                        <i class="fa fa-user"></i> <span>Kelola Akun</span>
                     </a>
                  </li>
               <?php }; ?>
               <?php if ($this->fungsi->user_login()->level == 1) { ?>
                  <li <?= $this->uri->segment(1) == 'absensi' ? 'class="active"' : '' ?>>
                     <a href="<?= site_url('input_data_siswa') ?>">
                        <i class="fa fa-desktop"></i> <span>Data Siswa</span>
                     </a>
                  </li>
               <?php }; ?>
               <?php if ($this->fungsi->user_login()->level == 2) { ?>
                  <li <?= $this->uri->segment(1) == 'absensi' ? 'class="active"' : '' ?>>
                     <a href="<?= site_url('absensi') ?>">
                        <i class="fa fa-desktop"></i> <span>Absensi</span>
                     </a>
                  </li>
               <?php }; ?>               
               <?php if ($this->fungsi->user_login()->level == 2) { ?>
                  <li <?= $this->uri->segment(1) == 'absensi' ? 'class="active"' : '' ?>>
                     <a href="<?= site_url('print/c_printfilter') ?>">
                        <i class="fa fa-print"></i> <span>Cetak Data</span>
                     </a>
                  </li>
               <?php }; ?>     
               <!-- Fitur Absen Untuk Siswa -->
               <?php if ($this->fungsi->user_login()->level == 3) { ?>
                  <li <?= $this->uri->segment(3) == 'kategori' ? 'class="active"' : '' ?>>
                     <a href="<?= site_url('siswa') ?>">
                        <i class="fa fa-desktop"></i> <span>Absen</span>
                     </a>
                  </li>
                  <li <?= $this->uri->segment(3) == 'kategori' ? 'class="active"' : '' ?>>
                     <a href="<?= site_url('RekapAbsenSiswa') ?>">
                        <i class="fa fa-calendar"></i> <span>Rekap Absen</span>
                     </a>
                  </li>
               <?php }; ?>
               <!--  Jam-jam                   -->
               <br><br><br><br><br><br><br>
               <li class="nav-item">
                  <a class="nav-link text-white">
                     <h2 class="my-0 text-center"><label id="hours"><?= date('H') ?></label>:<label id="minutes"><?= date('i') ?></label>:<label id="seconds"><?= date('s') ?></label></h2>
                  </a>
               </li>
               <!-- End Jam-jam -->
            </ul>
         </section>
      </aside>

      <!-- Content Wrapper -->
      <div class="content-wrapper">
         <?php echo $contents; ?>
      </div>

      <footer class="main-footer">
         <div class="pull-right hidden-xs">
            <b>Version</b> 1.0 </div>
         <strong>Copyright &copy; 2020 <a href="#">SMK CLHA'49</a>_</strong> All rights
         reserved.
      </footer>

      <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
      <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
      <script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
      <script src="<?= base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
      <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
      <script src="<?= base_url() ?>assets/js/disable.js"></script>
      <script>
         $(document).ready(function() {
            $('.sidebar-menu').tree()
         })
      </script>
      <script>
         $(document).ready(function() {
            $('#table1').dataTable()
         })
      </script>
<script>
    var hoursLabel = document.getElementById("hours");
    var minutesLabel = document.getElementById("minutes");
    var secondsLabel = document.getElementById("seconds");
    setInterval(setTime, 500);

    function setTime() {
        secondsLabel.innerHTML = pad(Math.floor(new Date().getSeconds()));
        minutesLabel.innerHTML = pad(Math.floor(new Date().getMinutes()));
        hoursLabel.innerHTML = pad(Math.floor(new Date().getHours()));
    }

    function pad(val) {
        var valString = val + "";
        if (valString.length < 2) {
            return "0" + valString;
        } else {
            return valString;
        }
    }
</script>
</body>

</html>
