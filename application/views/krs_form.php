<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah KRS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Form Tambah KRS</li>
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
                <h3 class="card-title">Form Tambah KRS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo base_url('index.php/Krs/tambah_krs_aksi'); ?>" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="tahun_akademik">Tahun Akademik</label>
                    <input type="hidden" class="form-control" id="id_thn_akad" name="id_thn_akad" value="<?php echo $id_thn_akad; ?>">
                    <input type="hidden" class="form-control" id="id_krs" name="id_krs" value="<?php echo $id_krs; ?>">
                    <input type="text" class="form-control" id="thn_akad_smt" name="thn_akad_smt" value="<?php echo $thn_akad_smt. '/' .$semester; ?>" readonly>

				           <div class="form-group">
                    <label for="nim">NIM Mahasiswa</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim; ?>" readonly></div>

                  <div class="form-group">
                    <label for="nama_matakuliah">Mata Kuliah</label>
                    <?php 
                      $query = $this->db->query('SELECT kode_matakuliah,nama_matakuliah FROM matakuliah');

                      $dropdowns = $query->result();
                      foreach($dropdowns as $dropdown){
                        $dropDownList[$dropdown->kode_matakuliah] = $dropdown->nama_matakuliah;
                      }

                      echo form_dropdown('kode_matakuliah', $dropDownList,$kode_matakuliah, 'class="form-control" id="kode_matakuliah"');

                     ?>
                  </div>

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <?php echo anchor('Krs/krs_aksi', '<div class = "btn btn-danger"> Cancel </div>') ?>
                </div>
              </form>
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
