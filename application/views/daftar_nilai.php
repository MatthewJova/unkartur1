<?php 

$nilai = get_instance();
$nilai->load->model('krs_model');
$nilai->load->model('m_crud');
$nilai->load->model('matakuliah_model');
$nilai->load->model('tahunakademik_model');

$krs = $nilai->krs_model->get_by_id($id_krs[0]);
$kode_matakuliah = $krs->kode_matakuliah;
$id_thn_akad = $krs->id_thn_akad;
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Nilai Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Nilai Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <center class="mb-4">
                <table>
			      	<tr>
			      		<td>Kode Matakuliah</td>
			      		<td>: <?php echo $kode_matakuliah; ?></td>
			      	</tr>

			      	<tr>
			      		<td>Nama Matakuliah</td>
			      		<td>: <?php echo $nilai->matakuliah_model->get_by_id($kode_matakuliah)->nama_matakuliah; ?></td>
			      	</tr>

			      	<tr>
			      		<td>SKS</td>
			      		<td>: <?php echo $nilai->matakuliah_model->get_by_id($kode_matakuliah)->sks; ?></td>
			      	</tr>

			      	<?php 
			      			$thn = $nilai->tahunakademik_model->get_by_id($id_thn_akad);
			      			$semester = $thn->semester == 'Ganjil';

			      			if($semester){
			      				$tampilSemester = "Ganjil";
			      			}else{
			      				$tampilSemester = "Genap";
			      			}
			      		 ?>

			      	<tr>
			      		<td>
			      			Tahun Akademik/Semester
			      		</td>
			      		<td>: <?php echo $thn->tahun_akademik."(".$tampilSemester.")" ?></td>
			      	</tr>
			    </table>
			</center>

			<table id="example1" class="table table-bordered table-striped">
				<tr>
					<td>NO</td>
					<td>NIM</td>
					<td>Nama Mahasiswa</td>
					<td>Nilai</td>
				</tr>

				<?php
				$no = 1;
				    for ($i = 0; $i < sizeof($id_krs); $i++) {
				    ?>

				    <tr>
				        <td><?php
				 
				echo
				 
				$no++; ?></td>
				        <?php
				 
				$nim = $nilai->krs_model->get_by_id($id_krs[$i])->nim; ?>
				        <td><?php
				 
				echo
				 
				$nim; ?></td>
				        <td><?php
				 
				echo
				 
				$nilai->m_crud->get_by_id($nim)->nama ?></td>
				        <td><?php echo $nilai->krs_model->get_by_id($id_krs[$i])->nilai ?></td>
				    </tr>
				    <?php
				    }
				?>

			</table>      	

              </div>
              </div>
              <!-- /.card-body -->
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
