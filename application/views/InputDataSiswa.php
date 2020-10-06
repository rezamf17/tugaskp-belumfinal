<section class="content-header">
   <h1>
      Data Siswa
      <small>Control Panel</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">Input Data Siswa</li>
   </ol>


</section>

<!-- Main content -->
<section class="content">

 <div class="box">
      <div class="box-header with-border">
         <h3 class="box-title">Data Siswa</h3>
      </div>
         <form action="" method="get" accept-charset="utf-8">
            <a href="<?= base_url('input_data_siswa')?>" class="btn btn-primary">Semua</a>
            <a href="<?= base_url('kelas/xrpl1')?>" class="btn btn-info">X-RPL-1</a>
            <a href="<?= base_url('kelas/xirpl1')?>" class="btn btn-info">XI-RPL-1</a>
            <a href="<?= base_url('kelas/xiirpl1')?>" class="btn btn-info">XII-RPL-1</a>
         </form>

<div class="box-body table-responsive">
   <?php ($roww->result()) ?>
         <table class="table table-bordered table-striped" id="table1">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>Kelas</th>
                  <th>Level</th>
               </tr>
            </thead>
            <tbody>
               <?php $no = 1;
                      foreach($roww->result() as $key => $data) { ?>
               <tr>
                  <td style="width: 5%;"><?= $no++ ?>.</td>
                  <td><?=$data->username?></td>
                  <td><?=$data->nis?></td>
                  <td><?=$data->name?></td>
                  <td><?=$data->alamat?></td>
                  <td><?=$data->jenis_kelamin?></td>
                  <td><?=$data->kelas?></td>
                  <td><?php if($data->level == 1)
                  {
                     echo ("Admin");
                  }elseif ($data->level == 2) {
                     echo "Guru";
                  }elseif ($data->level == 3) {
                     echo "Siswa";
                  } ?></td>
               </tr>
            <?php 
            } ?>
            </tbody>
         </table>

      </div>
</section>