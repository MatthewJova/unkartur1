  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Form Edit Mahasiswa</li>
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
                <h3 class="card-title">Form Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo base_url(); ?>index.php/crud/update" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $result['nim']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $result['nama']; ?>" placeholder="Masukkan Nama">
                  </div>
				  <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label><br>
    				<input type="radio" class="form-radio-input" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" <?php if ($result['jenis_kelamin'] == 'Laki-laki') echo 'checked'; ?>> Laki-laki
    				<input type="radio" class="form-radio-input" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" <?php if ($result['jenis_kelamin'] == 'Perempuan') echo 'checked'; ?>> Perempuan
          </div>
				  <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $result['tanggal_lahir']; ?>">
          </div>

				   <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="id_status" name="id_status" required>
						<?php foreach ($result['status_options'] as $status): ?>
							<option value="<?php echo $status['id_status']; ?>" <?php if ($status['id_status'] == $result['id_status']) echo 'selected'; ?>>
								<?php echo $status['nama_status']; ?>
							</option>
						<?php endforeach; ?>
					</select>
            </div>

				  <div class="form-group">
            <label for="agama">Agama</label>
            <select class="form-control" id="id_agama" name="id_agama" required>
						<?php foreach ($result['agama_options'] as $agama): ?>
							<option value="<?php echo $agama['id_agama']; ?>" <?php if ($agama['id_agama'] == $result['id_agama']) echo 'selected'; ?>>
								<?php echo $agama['nama_agama']; ?>
							</option>
						<?php endforeach; ?>
					</select>
          </div>

				  <label for="hobi">Hobby</label>
				  <div class="form-check">
                    <div class="form-check">
						<input class="form-check-input" type="checkbox" name="hobi[]" value="Olahraga" <?php if (in_array('Olahraga', $result['hobi'])) echo 'checked'; ?>>
						<label class="form-check-label" for="hobi_olahraga">Olahraga</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="hobi[]" value="Kuliner" <?php if (in_array('Kuliner', $result['hobi'])) echo 'checked'; ?>>
						<label class="form-check-label" for="hobi_kuliner">Kuliner</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="hobi[]" value="Teknologi" <?php if (in_array('Teknologi', $result['hobi'])) echo 'checked'; ?>>
						<label class="form-check-label" for="hobi_teknologi">Teknologi</label>
					</div>
          </div>

          <div class="form-group">
            <label for="prodi">Program Studi</label>
            <select class="form-control" id="id_prodi" name="id_prodi" required>
            <?php foreach ($result['prodi_options'] as $prodi): ?>
              <option value="<?php echo $prodi['id_prodi']; ?>" <?php if ($prodi['id_prodi'] == $result['id_prodi']) echo 'selected'; ?>>
                <?php echo $prodi['nama_prodi']; ?>
              </option>
            <?php endforeach; ?>
          </select>
          </div>

          <div class="form-group">
            <label for="semester">Semester</label>
            <input type="number" class="form-control" id="semester" name="semester" value="<?php echo $result['semester']; ?>" placeholder="Masukkan Semester">
          </div>

                  <div class="form-group">
                    <label for="foto">File input</label>
                    <div class="input-group">
					<div class="custom-file">
                        <input type="file" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                      </div>
					  <?php if (!empty($result['foto'])): ?>
						<img src="<?php echo base_url('uploads/' . $result['foto']); ?>" alt="Foto" width="250">
					<?php endif; ?>
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
