<section class="content-header">
 <h1>
  Halaman Absen
  <small>Siswa</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
  <li class="active">Halaman Absen Siswa</li>
</ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Silahkan Klik Tombol Absen</h3>
    <form action="<?php echo base_url('Absensi_Siswa/otomatis_absen'); ?>" method="post">
      <input style="display: none;" type="text" name="id" value="<?= $this->fungsi->user_login()->user_id ?>">
      <input style="display: none;" type="text" name="kelas" value="<?= $this->fungsi->user_login()->kelas ?>">
      <!-- <p><?php echo $this->session->flashdata('message'); ?></p>  -->
      <button type="submit" class="btn btn-primary">Absen</button>
      <!-- <input type="submit" value="Absen" class="btn btn-primary" onclick="myFunction()" id="myBtn""> -->
      <a href="<?= base_url('Absensi_Siswa/non_aktif')?>" title="">aaa</a>
    </form>
    <div class="box-body table-responsive">

    </div>
  </div>

<!-- <script type="text/javascript">
  function myFunction() {
     document.getElementById("myBtn").disabled = true;
     setTimeout(function(){
       document.getElementById("myBtn").disabled = false;
     }, 5000);
}
</script> -->
</section>
