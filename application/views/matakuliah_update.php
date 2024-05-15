  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Matakuliah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Form Edit Matakuliah</li>
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
                <h3 class="card-title">Form Edit Matakuliah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php foreach ($matakuliah as $mk) : ?>
                <form method="post" action="<?php echo base_url(); ?>index.php/Matakuliah/update_aksi" enctype="multipart/form-data">

                  <div class="card-body">
                    <div class="form-group">
                      <input type="hidden" class="form-control" id="kode_matakuliah" name="kode_matakuliah" value="<?php echo $mk->kode_matakuliah; ?>">
                    </div>
                    <div class="form-group">

                      <label for="nama_matakuliah">Nama Matakuliah</label>
                      <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" value="<?php echo $mk->nama_matakuliah; ?>" placeholder="Masukkan Kode">

                      <label for="sks">SKS</label>
                      <select name="sks" class="form-control">
                        <option> <?php echo $mk->sks; ?> </option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                      </select>

                      <label for="semester">Semester</label>
                      <select name="semester" class="form-control">
                        <option> <?php echo $mk->semester ?> </option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                      </select>

                      <label for="nama_prodi">Program Studi</label>
                      <select name="nama_prodi" class="form-control">
                        <option value="<?php echo $mk->nama_prodi ?>"><?php echo $mk->nama_jurusan; ?></option>
                        <!--<option value="<?php echo $mk->nama_prodi ?>" style="font-weight: bold;">
                          <?php echo $mk->nama_jurusan; ?>
                        </option>--> 

                        <?php foreach ($prodi as $prd) : ?>
                          <option value="<?php echo $prd->nama_prodi; ?>"><?php echo $prd->nama_prodi; ?></option>
                        <?php endforeach; ?>
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