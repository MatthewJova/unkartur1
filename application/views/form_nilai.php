<?php 
$nilai = get_instance();
$nilai->load->model('matakuliah_model');
$nilai->load->model('tahunakademik_model');
 ?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input Nilai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Form Input Nilai</li>
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
			      	<?php 
			      		if($list_nilai == null){
			      			$thn = $nilai->tahunakademik_model->get_by_id($id_thn_akad);
			      			$semester = $thn->semester == 'Ganjil';

			      			if($semester == 'Ganjil'){
			      				$tampilSemester = "Ganjil";
			      			}else{
			      				$tampilSemester = "Genap";
			      			}
			      		
			      	 ?>

			      	 <div class="alert alert-danger">
			      	 	Maaf, Kode Matakuliah Yang anda input <strong>Tidak Tersedia!</strong> di tahun ajaran <?php echo $thn->tahun_akademik . "(" .$tampilSemester .")"; ?>
			      	 </div>

			      	  <?php echo anchor('Nilai/input_nilai', '<div class = "btn btn-sm btn-primary"> Kembali </div>') ?>

			    	<?php  
			    		}else{
			    	?>
			    	<center>
				    	<legend><strong>MASUKKAN NILAI AKHIR</strong></legend>

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
				    				$semester = $thn->semester=='Ganjil';

				    				if($semester == 'Ganjil'){
					      				$tampilSemester = "Ganjil";
					      			}else{
					      				$tampilSemester = "Genap";
					      			}
				    			 ?>
				    		<tr>
				    			<td>Tahun Akademik/Semester</td>
				    			<td>: <?php echo $thn->tahun_akademik ."(".$tampilSemester .")" ?></td>
				    		</tr>
				    	</table>
					</center>

					<form method="post" action="<?php echo base_url('index.php/Nilai/simpan_nilai'); ?>">
						
						<table id="example1" class="table table-bordered table-striped">
							<tr>
								<td width="25px">NO</td>
								<td>NIM</td>
								<td>Nama Mahasiswa</td>
								<td>Nilai</td>
							</tr>

							<?php 
							$no = 1;
							foreach($list_nilai as $row): ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $row->nim; ?></td>
									<td><?php echo $row->nama; ?></td>
									<input type="hidden" name="id_krs[]" value="<?php echo $row->id_krs; ?>">
									<td width="70px"><input type="text" name="nilai[]" class="form-control" value="<?php echo $row->nilai; ?>"></td>
								</tr>

							<?php endforeach; ?>

						</table>

						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
			    <?php } ?>
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
