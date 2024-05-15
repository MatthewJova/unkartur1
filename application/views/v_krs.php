  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengisian KRS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Pengisian KRS</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content d-flex justify-content-center">
      <div class="container-fluid align-items-center">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Pengisian Matakuliah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Kode Matkul</th>
                    <th>Nama Matkul</th>
                    <th>SKS</th>
                    <th>Jam</th>
                    <th>Aksi</th>
					
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>K001
                    </td>
                    <td>PANCASILA</td>
                    <td> 2</td>
                    <td>09:00</td>
					<td><input type="checkbox" name="matkul_checkbox" value="K001"></td>
                  </tr>
                  <tr>
                    <td>K002
                    </td>
                    <td>PKN</td>
                    <td>2</td>
                    <td>12:30</td>
					<td><input type="checkbox" name="matkul_checkbox" value="K002"></td>
                  </tr>
                  <tr>
                    <td>K003
                    </td>
                    <td>MANDARIN</td>
                    <td>3</td>
                    <td>13:00</td>
					<td><input type="checkbox" name="matkul_checkbox" value="K003"></td>
                  </tr>
                  <tr>
                    <td>K004
                    </td>
                    <td>BAHASA INGGRIS</td>
                    <td>3</td>
                    <td>15:00</td>
					<td><input type="checkbox" name="matkul_checkbox" value="K004"></td>
                  </tr>
                  <tr>
                    <td>K005</td>
                    <td>MATEMATIKA TERAPAN</td>
                    <td>4</td>
                    <td>08:00</td>
					<td><input type="checkbox" name="matkul_checkbox" value="K005"></td>
                  </tr>
                  <tr>
                    <td>K006</td>
                    <td>STRUKTUR DATA</td>
                    <td>4</td>
                    <td>14:30</td>
					<td><input type="checkbox" name="matkul_checkbox" value="K006"></td>
                  </tr>
                  <tr>
                    <td>K007</td>
                    <td>PEMROGAMAN DASAR</td>
                    <td>4</td>
                    <td>11:30</td>
					<td><input type="checkbox" name="matkul_checkbox" value="K007"></td>
                  </tr>
                  <tr>
                    <td>K008</td>
                    <td>DESAIN GRAFIS</td>
                    <td>4</td>
                    <td>10:30</td>
					<td><input type="checkbox" name="matkul_checkbox" value="K008"></td>
                  </tr>
                  <tr>
                    <td>K009</td>
                    <td>AKUNTANSI</td>
                    <td>4</td>
                    <td>07:30</td>
					<td><input type="checkbox" name="matkul_checkbox" value="K009"></td>
                  </tr>
                  <tr>
                    <td>K0010</td>
                    <td>PROSES BISNIS</td>
                    <td>4</td>
                    <td>16:00</td>
					<td><input type="checkbox" name="matkul_checkbox" value="K0010"></td>
                  </tr>
                  </tfoot>
                </table>
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
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
