<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Grafik Data Agama</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Grafik Data Agama</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- STACKED BAR CHART -->
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/adminlte/plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
<!-- Page specific script -->
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
</body>
</html>
