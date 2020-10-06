<section class="content-header">
 <h1>
  Cetak Data
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
  <div class="row">
   <div class="col-md-4 col-md-offset-4">
    <div class="form-group">
      <form action="<?= base_url('print/c_print/date') ?>" method="get" accept-charset="utf-8">
          <label for="">Tanggal Awal</label>
          <input type="date" name="startdate" class="" placeholder="Pilih Tanggal"><br>
          <label for="">Tanggal Akhir</label>
          <input type="date" name="enddate">
     <button type="submit" class="btn btn-info"><i class="fa fa-print"></i>Print</button>
    </form>
    <a href="<?= base_url('print/c_print')?>" class="btn btn-warning"><i class="fa fa-print"></i>Print Semua Data PDF</a>
    <a href="<?= base_url('print/c_printxls/excel')?>" class="btn btn-success"><i class="fa fa-print"></i>Print Semua Data XLS</a>
    <a href="<?= base_url('print/c_print/x')?>" class="btn btn-primary"><i class="fa fa-print"></i>Print X-RPL-1</a>
    <a href="<?= base_url('print/c_print/xi')?>" class="btn btn-primary"><i class="fa fa-print"></i>Print XI-RPL-1</a>
    <a href="<?= base_url('print/c_print/xii')?>" class="btn btn-primary"><i class="fa fa-print"></i>Print XII-RPL-1</a>
  </div>
</div>
</div>
</div>


</section>