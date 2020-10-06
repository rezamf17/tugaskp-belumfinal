<section class="content-header">
   <h1>
      Dashboard
      <small>Control Panel</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">Dashboard</li>
   </ol>
    
</section>

<!-- Main content -->
<section class="content">

               <?php if ($this->fungsi->user_login()->level == 3) { ?>
                  
                       <h1>Selamat Datang <?= $this->fungsi->user_login()->name ?></h1>
                
               <?php }; ?>
</section>