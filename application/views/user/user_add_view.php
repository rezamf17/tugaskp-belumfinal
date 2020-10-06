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
         <h3 class="box-title">Add User Users</h3>
         <div class="pull-right">
            <a href="<?= site_url('operator') ?>" class="btn btn-warning btn-sm"> <i class="fa fa-undo"></i> Back</a>
         </div>
      </div>


      <div class="box-body">
         <div class="row">
            <div class="col-md-4 col-md-offset-4">
               <?php //echo validation_errors(); 
               ?>
               <?php echo form_open('operator/post'); ?>
               <div class="form-group">
                  <label for="">NIS*</label>
                  <input type="text" name="nis" class="form-control">
               </div>
               <div class="form-group">
                  <label for="">Nama Lengkap*</label>
                  <input type="text" name="nama" class="form-control">
               </div>
                <div class="form-group">
                  <label for="">Jenis Kelamin*</label>
                  <select name="jenis_kelamin" class="form-control">
                     <option value="Laki-laki">Laki-laki</option>
                     <option value="Perempuan">Perempuan</option>
                  </select>
               </div>
               <div class="form-group ">
                  <label for="">Username*</label>
                  <input type="text" name="username" class="form-control">
               </div>
               <div class="form-group ">
                  <label for="">Password*</label>
                  <input type="password" name="password" class="form-control">
               </div>
               <div class="form-group">
                  <label for="">Password Confirmation*</label>
                  <input type="password" name="passconf"  class="form-control">
               </div>
               <div class="form-group">
                  <label for="">Alamat</label>
                  <textarea name="alamat" class="form-control"><?= set_value('alamat') ?></textarea>
               </div>
                <div class="form-group ">
                  <label for="">Kelas*</label>
                  <select name="kelas" class="form-control">
                     <option value="">-KOSONG-</option>
                     <option value="X-RPL-1">X-RPL-1</option>
                     <option value="XI-RPL-1">XI-RPL-1</option>
                     <option value="XII-RPL-1">XII-RPL-1</option>
                  </select>               
               </div>
               <div class="form-group <?= form_error('level') ? 'has-error' : null ?>">
                  <label for="">Level*</label>
                  <select name="level" class="form-control">
                     <option value="">- Pilih -</option>
                     <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>> Admin </option>
                     <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>> Guru </option>
                     <option value="3" <?= set_value('level') == 3 ? "selected" : null ?>> Siswa </option>
                  </select>

               </div>
               <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Save</button> <button type="reset" class="btn btn btn-sm"> Reset</button>

               </div>
               </form>
            </div>
         </div>
      </div>
   </div>


</section>