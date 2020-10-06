<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Log in</title>
   <link rel="stylesheet" href="<?= base_url() ?>vendor\bootstrap\css\bootstrap.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>vendor\fontawesome-free\css\all.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>vendor\datatables\dataTables.bootstrap4.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets\css\sb-admin-2.css">
   
   <script src="<?= base_url() ?>vendor\jquery\jquery.min.js"></script>
   <script src="<?= base_url() ?>vendor\bootstrap\js\bootstrap.bundle.min.js"></script>
   <script src="<?= base_url() ?>assets\js\jquery-3.3.1.slim.min.js"></script>
   <script src="<?= base_url() ?>assets\js\bootstrap.min.js"></script>
   <script src="<?= base_url() ?>assets\js\popper.min.js"></script>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body class="hold-transition login-page">
<!-- Login Form -->
   <div class="container">
   <!-- Outer Row -->
      <div class="row justify-content-center mt-5"></div>
         <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
               <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                     <div class="col-lg-6 d-none d-lg-block bg-login text-center">
                        <div class="welcome" style="margin-top: 80px;">
                           <label  class="text-gray-900" style="font-size: 24px; font-weight: 500;">
                              <p><b>SMK CELLULAR HAURO'49 RANCAEKEK<p></b>
                           </label>
                           <img src="<?php echo base_url();?>assets/img/cg.jpg" width="100" height="100">
                        </div>                        
                     </div>                                    
                     <div class="col-lg-6">
                        <div class="p-5">
                           <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Selamat Datang Di Website <p>SMK CLHA 49<p></b></h1>
                           </div>
                           <form class="user" action="<?= site_url('auth/process') ?>" method="post">
                              <div class="form-group has-feedback">
                                 <input type="text" name="username" class="form-control form-control-user" placeholder="Username" required autofocus>
                                 <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                              </div>
                              <div class="form-group has-feedback">
                                 <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                                 <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                              </div>
                                 <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Sign In</button>                                    
                                 <!-- onclick="myFunction()" -->
                                 <small class="text-danger text-sm mt-2">
                                 *Untuk Mendapatkan Akun, bisa hubungi pihak sekolah
                                 </small>                                 
                              </div>
                           </form>
                        </div>
                     </div>                  
                  </div>         
               </div>
            </div>
         </div>
      </div>
   <!-- End Outer Row -->
   </div>
<!-- End Login Form -->
   <script>
      $(function() {
         $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
         });
      });
   </script>
</body>
</html>