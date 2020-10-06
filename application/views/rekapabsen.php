<section class="content-header">
   <h1>
      Rekap Absensi
      <small>Control Panel</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">Dashboard</li>
   </ol>

</section>

<!-- Main content -->
<section class="content">
   <div class="box">
      <label>Nama : <?= $this->fungsi->user_login()->name ?></label><br>
      <label>Kelas : <?= $this->fungsi->user_login()->kelas ?></label><br>
      <label>NIS : <?= $this->fungsi->user_login()->nis ?></label>
      <input type="text" name="user_id" style="display: none;" value="<?= $this->fungsi->user_login()->user_id ?>">
   </div>
   <div class="box">
      <?php ($row->result()) ?>
      <div class="box-body table-responsive">
         <table class="table table-bordered table-striped" id="table1">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Jam Absen</th>
                  <th>Status</th>
                  <th>Kelas</th>
               </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach($row->result() as $key => $data) { ?>
               <tr>
                  <td style="width: 5%;"><?= $no++ ?>.</td>
                  <td><?=$data->nama?></td>
                  <td><?=$data->id_tanggal?></td>
                  <td><?=$data->jam_masuk?></td>
                  <td><?=$data->st_jam_msk?></td>
                  <td><?=$data->id_kelas?></td>
               </tr>
               <?php 
            } ?>
         </tbody>
      </table>
   </div>
</div>
</section>