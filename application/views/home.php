<!DOCTYPE html>
  <head>
    <title>SMK CLHA 49</title>

   <!-- Bootstrap core CSS -->   
   <!-- <link rel="stylesheet" href="vendor\bootstrap\css\bootstrap.min.css"> -->
   <!-- <link rel="stylesheet" href="vendor\fontawesome-free\css\all.min.css">
   <link rel="stylesheet" href="vendor\datatables\dataTables.bootstrap4.css">
   <link rel="stylesheet" href="assets\css\sb-admin-2.css"> -->

    <link href="vendor\jquery\jquery.min.js">
    <link href="vendor\bootstrap\js\bootstrap.bundle.min.js">
    <link href="assets\js\jquery-3.3.1.slim.min.js">
    <link href="assets\js\bootstrap.min.js">
    <link href="assets\js\popper.min.js">

    <link href="assets/bower_components/bootstrap/dist/css/new/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/bower_components/bootstrap/dist/css/new/heroic-features.css" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <html lang="en">
  </head>
  <body style="background: #5f5f5f url(assets/img/regal.png) top left repeat;">        
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">
        <img src="assets/img/cg.jpg" width="70" height="50"> SMK CLHA 49</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" >About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" >Gallery</a>
            </li>
            <li class="nav-item">
              </li>
            <li class="nav-item">
              <a class="nav-link" >Visi&Misi</a>
            </li>
              <a href="<?=base_url('auth/login')?>" class="nav-link" >Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Div Case -->
        <div class="form-group has-feedback">
            <h1 class="display-1">Selamat Datang..!</h1>
            <p class="lead">Selamat datang di website resmi SMK CHLHA 49 Sekolah menengah Kejuruan.
            <!-- <a href="#" class="btn btn-primary btn-lg">Ayo Daftar!</a> -->
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

      <!-- Page Features -->
      <div >
      <div class="form-group has-feedback">
         <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         <type="text" name="username" class="form-control form-control-user" placeholder="Username" required autofocus>
         <h1 class="display-4">VISI</h1>
         <p class="display-8">Mencetak siswa yang dibutuhkan Dunia Usaha dan Dunia Industri,mampu mengikuti perkembangan Iptek,dilandasi iman dan Taqwa
      </div>
      <div class="form-group has-feedback">
         <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         <type="text" name="username" class="form-control form-control-user" placeholder="Username" required autofocus>
         <h1 class="display-4">MISI</h1>
         <p class="display-8">
          <ul> 
            <li>Mempersiapkan kurikulum berstandar industri.</li>
            <li>Menyediakan fasilitas sumer belajar yang berbasis iptek.</li>
            <li>Membuat program kerja peningkatan keimanan dan ketaqwaan siswa.</li>
          </ul>  
        
      </div>
      <div class="form-group has-feedback">
         <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         <type="text" name="username" class="form-control form-control-user" placeholder="Username" required autofocus>
         <h1 class="display-4">TUJUAN</h1>
          <ul> 
            <li>Menghasilkan lulusan yang menyelesaikan kurikulum berstandar industri.</li>
            <li>Menghasilkan siswa yang mampu mengikuti perkembangan iptek.</li>
          </ul>
      
      </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; SMK CHLA 49 2020
      </div>
      <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  </body>

</html>