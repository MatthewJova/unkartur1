  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NIM</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal Lahir</th>
					<th>Status</th>
					<th>Agama</th>
					<th>Hobi</th>
          <th>Prodi</th>
          <th>Semester</th>
					<th>Foto</th>
					<th>Aksi</th>
                  </tr>
				  </thead>
                  <tbody>
                  <?php foreach ($result as $value): ?>
					<tr>
						<td><?php echo $value['nim']; ?></td>
						<td><?php echo $value['nama']; ?></td>
						<td><?php echo $value['jenis_kelamin']; ?></td>
						<td><?php echo tanggalIndonesia($value['tanggal_lahir']); ?></td>
						<td><?php echo isset($value['nama_status']) ? $value['nama_status'] : ''; ?></td>
						<td><?php echo isset($value['nama_agama']) ? $value['nama_agama'] : ''; ?></td>
						<td><?php echo $value['hobi']; ?></td>
            <td><?php echo isset($value['nama_prodi']) ? $value['nama_prodi'] : ''; ?></td>
            <td><?php echo $value['semester']; ?></td>
						<td>
							<?php if (!empty($value['foto'])): ?>
								<img src="<?php echo base_url('./uploads/' . $value['foto']); ?>" alt="Foto Mahasiswa" width="90" height="100">
							<?php else: ?>
								<span>Tidak ada foto</span>
							<?php endif; ?>
						</td>
						<td>
							<a href="<?php echo base_url(); ?>index.php/crud/edit/<?php echo $value['nim']; ?>" class="button">Edit</a>
							<a href="<?php echo base_url(); ?>index.php/crud/delete/<?php echo $value['nim']; ?>" class="button">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>NIM</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal Lahir</th>
					<th>Status</th>
					<th>Agama</th>
					<th>Hobi</th>
          <th>Prodi</th>
          <th>Semester</th>
					<th>Foto</th>
					<th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
