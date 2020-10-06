<h2><center>Data Absensi Siswa</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Tanggal</th>
    <th>Jam</th>
    <th>Status</th>
  </tr>
  <?php 
  $no = 1;
foreach($absen->result() as $key => $data) { ?>
    <tr>
     <td style="width: 5%;"><?= $no++ ?>.</td>
     <td><?=$data->nama?></td>
     <td><?=$data->id_kelas?></td>
     <td><?=$data->id_tanggal?></td>
     <td><?=$data->jam_masuk?></td>
     <td><?=$data->st_jam_msk?></td>
   </tr>
   <?php
 }
 ?>
</table>