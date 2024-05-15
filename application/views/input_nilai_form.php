<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Masuk Input Nilai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Masuk Input Nilai</li>
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
                <h3 class="card-title">Form Masuk Input Nilai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo base_url('index.php/Nilai/input_nilai_aksi'); ?>" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_thn_akad">Tahun Akademik / Semester</label>
                    <?php 
                      $query = $this->db->query('SELECT id_thn_akad, semester,CONCAT(tahun_akademik,"/")AS thn_semester FROM tahun_akademik');

                      $dropdowns = $query->result();

                      foreach($dropdowns as $dropdown){
                        if($dropdown->semester == 'Ganjil'){
                          $tampilSemester = "Ganjil";
                        }else{
                          $tampilSemester = "Genap";
                        }

                        $dropDownList[$dropdown->id_thn_akad] = $dropdown->thn_semester . " " . $tampilSemester;
                      }
                      echo form_dropdown('id_thn_akad',$dropDownList,'','class="form-control" id="id_thn_akad"');
                     ?>
                   </div>
                    <!--<label for="kode_matakuliah">Kode Matakuliah</label>
                    <input type="text" name="kode_matakuliah" id="kode_matakuliah" class="form-control" placeholder="Masukkan Kode Matakuliah">-->


                    <div class="form-group">
                    <label for="kode_matakuliah">Kode Matakuliah</label>
                    <?php 
                      $query1 = $this->db->query('SELECT kode_matakuliah,nama_matakuliah FROM matakuliah');

                      $dropdowns1 = $query1->result();
                      foreach($dropdowns1 as $dropdown1){
                        $dropDownList1[$dropdown1->kode_matakuliah] = $dropdown1->kode_matakuliah . ' - ' . $dropdown1->nama_matakuliah;
                      }

                      echo form_dropdown('kode_matakuliah', $dropDownList1,$kode_matakuliah, 'class="form-control" id="kode_matakuliah"');

                     ?>
                  </div>
                  

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Proses</button>
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
