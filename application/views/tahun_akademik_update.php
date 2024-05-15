  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Tahun Akademik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Form Edit Tahun Akademik</li>
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
                <h3 class="card-title">Form Edit Tahun Akademik</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php foreach ($tahun_akademik as $ta) : ?>
                <form method="post" action="<?php echo base_url(); ?>index.php/tahun_akademik/update_aksi" enctype="multipart/form-data">

                  <div class="card-body">
                    <div class="form-group">
                      <input type="hidden" class="form-control" id="id_thn_akad" name="id_thn_akad" value="<?php echo $ta->id_thn_akad; ?>">
                    </div>
                    <div class="form-group">
                      <label for="tahun_akademik">Tahun Akademik</label>
                      <input type="text" class="form-control" id="tahun_akademik" name="tahun_akademik" value="<?php echo $ta->tahun_akademik; ?>" placeholder="Masukkan Kode">

                      <label for="semester">Semester</label>
                      <select class="form-control" id="semester" name="semester" required>
                      <option> <?php echo $ta->semester ?></option>
                      <option>Ganjil</option>
                      <option>Genap</option>
                      </select>

                      <label for="status">Status</label>
                      <select class="form-control" id="status" name="status" required>
                      <option> <?php echo $ta->status ?></option>
                      <option>Aktif</option>
                      <option>Tidak Aktif</option>
                      </select>
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