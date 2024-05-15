  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <center>
          <div class="alert alert-success" role="alert">
            <i class="fa fa-users"></i> 
            Selamat Datang Sebagai <?=ucfirst($this->fungsi->user_login()->nama)?> <b>(<?=ucfirst($this->fungsi->user_login()->status)?>)
            </center>
        <div class="row">
          <div class="col-lg-7">
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
          <!-- /.col-md-6 -->	
		  
          <!-- STACKED BAR CHART -->
       <div class="col-md-5">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Grafik Data Agama</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/adminlte/plugins/chart.js/Chart.min.js'); ?>"></script>

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

<!-- AdminLTE -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>



<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url('assets/adminlte/plugins/chart.js/Chart.min.js'); ?>"></script>

<script>
  $(function () {
    /* uPlot
     * -------
     * Here we will create a few charts using uPlot
     */
	//---------------------
    //- STACKED BAR CHART -
    //---------------------
	<?php
		$sql = "SELECT b.nama_agama, COUNT(*) as total FROM mahasiswa a JOIN agama b ON a.id_agama = b.id_agama GROUP BY a.id_agama";
		$hasil = $this->db->query($sql)->result();

		// Inisialisasi nilai variabel awal
		$agama = "";
		$jumlah = null;
		foreach ($hasil as $item) {
			$agm = $item->nama_agama;
			$agama .= "'$agm', ";
			$jum = $item->total;
			$jumlah .= "$jum, ";
		}
	?>
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = {
								labels: [<?php echo $agama; ?>],
								datasets: [{
									label:'Data Agama ',
									backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)','rgb(255, 255, 0)','rgba(255, 0, 0, 1)'],
									borderColor: ['rgb(255, 99, 132)'],
									data: [<?php echo $jumlah; ?>]
								}]
							}

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
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
