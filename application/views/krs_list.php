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
              <li class="breadcrumb-item active">Kartu Rencana Studi</li>
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
                    <td>&nbsp;<?php echo $nim ?></td>
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
                    <td>&nbsp;<?php echo $tahun_akademik.'&nbsp;('.$semester.')'; ?></td>
                  </tr>
                </table>
              </center>
              <a href="<?php echo base_url('index.php/krs/tambah_krs/' . $nim . '/' . $id_thn_akad); ?>" class="btn btn-primary">Tambah Data KRS</a>
              

                <table id="example1" class="table table-bordered table-striped">
                  <tr>
                  <th>NO</th>
                  <th>Kode Matakuliah</th>
                  <th>Nama Matakuliah</th>
                  <th>SKS</th>
                  <th>Aksi</th>
                </tr>

                <?php 
                $no = 1;
                $jumlahSks=0;
                foreach($krs_data as $krs) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $krs->kode_matakuliah; ?></td>
                    <td><?php echo $krs->nama_matakuliah; ?></td>
                    <td>
                      <?php echo $krs->sks;
                      $jumlahSks+=$krs->sks; ?>
                      
                    </td>
                    <td><?php echo anchor('krs/update/'.$krs->id_krs,'<div class ="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>
                      <?php echo anchor('krs/delete/'.$krs->id_krs,'<div class ="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
                  </tr>

                <?php endforeach; ?>

                <tr>
                    <td colspan="3" align="right"><strong> Jumlah SKS </strong></td>
                    <td colspan ="3"><strong><?php echo $jumlahSks; ?></strong></td>
                </tr>

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
