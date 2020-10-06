<section class="content-header">
   <h1>
      Users
      <small>Pengguna</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">users</li>
   </ol>
</section>

<!-- Main content -->
<section class="content">


   <div class="box">
      <div class="box-header with-border">
         <h3 class="box-title">Data Users</h3>
         <div class="pull-right">
            <a href="<?= site_url('user/add') ?>" class="btn btn-primary btn-sm"> <i class="fa fa-user-plus"></i> Create</a>
         </div>
      </div>


      <div class="box-body table-responsive">
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
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php $no = 1;
               foreach ($row->result() as $key => $data) { ?>
                  <tr>
                     <td style="width: 5%;"><?= $no++ ?>.</td>
                     <td><?= $data->username ?></td>
                     <td><?= $data->nis?></td>
                     <td><?= $data->name?></td>
                     <td><?= $data->alamat?></td>
                     <td><?= $data->jenis_kelamin?></td>
                     <td><?= $data->kelas?></td>
                    <td><?php if($data->level == 1)
                  {
                     echo ("Admin");
                  }elseif ($data->level == 2) {
                     echo "Guru";
                  }elseif ($data->level == 3) {
                     echo "Siswa";
                  } ?></td>
                     <td class="text-center" width="160px">
                        <form action="<?= site_url('user/del') ?>" method="post">
                           <a href="<?= site_url('user/edit/' . $data->user_id) ?>" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Update</a>
                           <!-- <a href="<?= site_url('user/edit/') ?>" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Delete</a> -->
                           <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                           <button onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Delete</button>
                        </form>
                     </td>
                  </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>


</section>