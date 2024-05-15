  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Form Mahasiswa</li>
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
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo base_url(); ?>index.php/crud/insert" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
          </div>
				  <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label><br>
  					<input type="radio" class="form-radio-input" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
  					<input type="radio" class="form-radio-input" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" required> Perempuan
          </div>
				  <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
          </div>
				   <div class="form-group">
          <label for="status">Status</label>
          <select class="form-control" id="id_status" name="id_status" required>
						<?php foreach ($status_kawin as $status): ?>
							<option value="<?php echo $status['id_status']; ?>">
								<?php echo $status['nama_status']; ?>
							</option>
						<?php endforeach; ?>
					</select>
          </div>


				  <div class="form-group">
          <label for="agama">Agama</label>
          <select class="form-control" id="id_agama" name="id_agama" required>
						<?php foreach ($agama as $agm): ?>
							<option value="<?php echo $agm['id_agama']; ?>">
								<?php echo $agm['nama_agama']; ?>
							</option>
						<?php endforeach; ?>
					</select>
          </div>

				  <label for="hobi">Hobby</label>
				  <div class="form-check">
                    <div class="form-check">
						<input class="form-check-input" type="checkbox" name="hobi[]" value="Olahraga">
						<label class="form-check-label" for="hobi_olahraga">Olahraga</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="hobi[]" value="Kuliner">
						<label class="form-check-label" for="hobi_kuliner">Kuliner</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="hobi[]" value="Teknologi">
						<label class="form-check-label" for="hobi_teknologi">Teknologi</label>
					</div>
          </div>

          <div class="form-group">
          <label for="prodi">Program Studi</label>
          <select class="form-control" id="id_prodi" name="id_prodi" required>
            <?php foreach ($prodi as $prd): ?>
              <option value="<?php echo $prd['id_prodi']; ?>">
                <?php echo $prd['nama_prodi']; ?>
              </option>
            <?php endforeach; ?>
          </select>
          </div>

          <div class="form-group">
              <label for="semester">Semester</label>
              <input type="number" class="form-control" id="semester" name="semester" placeholder="Masukkan Semester" required>
            </div>
          
                  <div class="form-group">
                    <label for="foto">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="foto" name="foto" required>
                        <label class="custom-file-label" for="foto">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
