  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kartu Hasil Studi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Kartu Hasil Studi</li>
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
                <center class="mb-4">
                <table>
                  <tr>
                    <td><strong>NIM : </strong></td>
                    <td>&nbsp;<?php echo $mhs_nim ?></td>
                  </tr>

                  <tr>
                    <td><strong>Nama Lengkap : </strong></td>
                    <td>&nbsp;<?php echo $nama ?></td>
                  </tr>

                  <tr>
                    <td><strong>Prodi : </strong></td>
                    <td>&nbsp;<?php echo $prodi ?></td>
                  </tr>

                  <tr>
                    <td><strong>Tahun Akademik / Semester : </strong></td>
                    <td>&nbsp;<?php echo $thn_akad; ?></td>
                  </tr>
                </table>
              </center>

                <table id="example1" class="table table-bordered table-striped">
                  <tr>
                  <th>NO</th>
                  <th>Kode Matakuliah</th>
                  <th>Nama Matakuliah</th>
                  <th>SKS</th>
                  <th>Nilai</th>
                  <th>Skor</th>
                </tr>

                <?php 
                $no = 1;
                $jumlahSks=0;
                $jumlahNilai=0;
                foreach($mhs_data as $row) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->kode_matakuliah; ?></td>
                    <td><?php echo $row->nama_matakuliah; ?></td>
                    <td><?php echo $row->sks; ?></td>
                    <td><?php echo $row->nilai; ?></td>
                    <td><?php echo skorNilai($row->nilai,$row->sks); ?></td>
                    <?php 
                      $jumlahSks+=$row->sks;
                      $jumlahNilai+=skorNilai($row->nilai,$row->sks);
                     ?>
                  </tr>

                <?php endforeach; ?>

                <tr>
                    <td colspan="3"> JUMLAH</td>
                    <td><?php echo $jumlahSks ?></td>
                    <td colspan = "2"><?php echo $jumlahNilai ?></td>
                </tr>
                </table>

                
                <div class="card-footer">
                  <?php 
                  if ($jumlahSks == 0) {
                      #echo "Anda Belum Mengambil SKS, silahkan ke menu KRS";
                    echo '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        <strong>Peringatan!</strong> Anda belum mengambil SKS. Silahkan ke menu KRS untuk mengambil SKS.
                      </div>';
                  } else {
                      #echo number_format($jumlahNilai/$jumlahSks, 2);
                    $ratarata = number_format($jumlahNilai/$jumlahSks, 2);
                    echo $ratarata;

                  }
                  echo "<span style='float: right;'>";
                    if($ratarata >=3.00 && $ratarata <= 4.00){
                      echo("Sangat Baik");
                    }
                    elseif($ratarata >= 3.00 && $ratarata <= 4.00){
                      echo("Cukup Baik");
                    }elseif($ratarata >= 2.00 && $ratarata <= 3.00){
                      echo("Baik");
                    }elseif($ratarata >= 1.00 && $ratarata <= 2.00){
                      echo("Buruk");
                    }else{
                      echo ("");
                    }
                    echo "</span>";
                   ?>
                </div>
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
