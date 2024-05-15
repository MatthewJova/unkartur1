  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Status</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Form Edit Status</li>
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
              <form method="post" action="<?php echo base_url(); ?>index.php/crud/update_akn" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $status['id']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $status['username']; ?>" placeholder="Masukkan Username">
					<label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $status['password']; ?>" placeholder="Masukkan Password">
					<label for="status">Status</label>
					<select class="form-control" id="status" name="status">
						<option value="Admin" <?php if ($status['status'] == 'Admin') echo 'selected'; ?>>Admin</option>
            <option value="Dosen" <?php if ($status['status'] == 'Dosen') echo 'selected'; ?>>Dosen</option>
						<option value="Mahasiswa" <?php if ($status['status'] == 'Mahasiswa') echo 'selected'; ?>>Mahasiswa</option>
					</select>
					</select>
					<label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $status['nama']; ?>" placeholder="Masukkan Nama">
          <label for="semester">Semester</label>
            <input type="number" class="form-control" id="semester" name="semester" value="<?php echo $status['semester']; ?>" placeholder="Masukkan Semester">
					<label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $status['email']; ?>" placeholder="Masukkan Email">
					<label for="level">Level</label>
                    <input type="text" class="form-control" id="level" name="level" value="<?php echo $status['level']; ?>" placeholder="Masukkan Level">
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
