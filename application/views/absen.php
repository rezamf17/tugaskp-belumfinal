<section class="content-header">
 <h1>
  Absensi
  <small>Control Panel</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
  <li class="active">Absensi</li>
</ol>    
</section>

<!-- Main content -->
<section class="content">
  <div class="box">
    <div class="box-body table-responsive">
     <?php ($row->result()) ?>
     <table class="table table-bordered table-striped" id="table1">
      <thead>
       <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
     <?php $no = 1;
     foreach($row->result() as $key => $data) { ?>
       <tr>
        <td style="width: 5%;"><?= $no++ ?>.</td>
        <td><?=$data->nama?></td>
        <td><?=$data->id_kelas?></td>
        <td><?=$data->id_tanggal?></td>
        <td><?=$data->jam_masuk?></td>
        <td><?=$data->st_jam_msk?></td>
        <td>
          <form action="post">
            <!-- <button type="submit" class="btn btn-info btn-sm">Konfirmasi</button> -->
            <a href="<?= site_url('Absensi_Siswa/Konfirmasi/' . $data->id_absen) ?>" class="btn btn-primary btn-xs"> <i class="fa fa-check"></i> Konfirmasi</a>
            <a href="<?= site_url('Absensi_Siswa/Tolak/' . $data->id_absen)?>" class="btn btn-danger btn-xs"><i class="fa fa-close"></i>Tolak</a>
          </form>
        </td>
      </tr>
      <?php 
    } ?>
  </tbody>
</table>
</div>
</div>
</div>

</section>