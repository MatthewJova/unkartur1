  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
              <div class="card-header">
                <h3 class="card-title">KHS MAHASISWA</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Matkul</th>
                    <th>Nama Matkul</th>
                    <th>SKS</th>
                    <th>Nilai Huruf</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>K001
                    </td>
                    <td>PANCASILA</td>
                    <td> 2</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>K002
                    </td>
                    <td>PKN</td>
                    <td>2</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>K003
                    </td>
                    <td>MANDARIN</td>
                    <td>3</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>K004
                    </td>
                    <td>BAHASA INGGRIS</td>
                    <td>3</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>K005</td>
                    <td>MATEMATIKA TERAPAN</td>
                    <td>4</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>K006</td>
                    <td>STRUKTUR DATA</td>
                    <td>4</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>K007</td>
                    <td>PEMROGAMAN DASAR</td>
                    <td>4</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>K008</td>
                    <td>DESAIN GRAFIS</td>
                    <td>4</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>K009</td>
                    <td>AKUNTANSI</td>
                    <td>4</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>K0010</td>
                    <td>PROSES BISNIS</td>
                    <td>4</td>
                    <td>A</td>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</script>
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

</body>
</html>
