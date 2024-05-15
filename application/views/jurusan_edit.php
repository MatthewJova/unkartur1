  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Jurusan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Form Edit Jurusan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit Jurusan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php foreach ($jurusan as $jrs) : ?>

              <form method="post" action="<?php echo base_url(); ?>index.php/Jurusan/update_aksi" enctype="multipart/form-data">

                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" id="id_jurusan" name="id_jurusan" value="<?php echo $jrs->id_jurusan; ?>">
                  </div>
                  <div class="form-group">
                    <label for="kode_jurusan">Kode Jurusan</label>
                      <input type="text" class="form-control" id="kode_jurusan" name="kode_jurusan" value="<?php echo $jrs->kode_jurusan; ?>" placeholder="Masukkan Kode">
                      <label for="nama_jurusan">Nama Jurusan</label>
                      <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" value="<?php echo $jrs->nama_jurusan; ?>" placeholder="Masukkan Jurusan">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <?php endforeach; ?>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url('assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>