<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Tes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Halaman Tes</li>
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
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo base_url(); ?>index.php/tes/proses" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                     <div class="card-body">
                    <label for="soal1">1. Dalam sebulan terakhir, seberapa sering Anda merasa kesal karena sesuatu yang terjadi secara tidak terduga?</label><br>

                    <p><input type="radio" id="jawaban1-sering" name="jawaban1" value="sering" class="form-radio-input">Sering</p>

                    <p><input type="radio" id="jawaban1-kadang" name="jawaban1" value="kadang" class="form-radio-input">Kadang-kadang</p>

                    <p><input type="radio" id="jawaban1-tidak-pernah" name="jawaban1" value="tidak pernah" class="form-radio-input">Tidak Pernah</p>

                    

                    <label for="soal2">2. Dalam sebulan terakhir, seberapa sering Anda merasa bahwa Anda tidak dapat mengendalikan hal-hal yang penting dalam hidup Anda?</label><br>

                    <p><input type="radio" id="jawaban2-sering" name="jawaban2" value="sering" class="form-radio-input">Sering</p>

                    <p><input type="radio" id="jawaban2-kadang" name="jawaban2" value="kadang" class="form-radio-input">Kadang-kadang</p>

                    <p><input type="radio" id="jawaban2-tidak-pernah" name="jawaban2" value="tidak pernah" class="form-radio-input">Tidak Pernah</p>

                    <br>

                    <label for="soal3">3. Dalam sebulan terakhir, seberapa sering Anda merasa gelisah dan stres?</label><br>
                    
                    <p><input type="radio" id="jawaban3-sering" name="jawaban3" value="sering" class="form-radio-input">Sering</p>

                    <p><input type="radio" id="jawaban3-kadang" name="jawaban3" value="kadang" class="form-radio-input">Kadang-kadang</p>
                    <p><input type="radio" id="jawaban3-tidak-pernah" name="jawaban3" value="tidak pernah" class="form-radio-input">Tidak Pernah</p>

                    <br>

                    <label for="soal4">4. Dalam sebulan terakhir, seberapa sering Anda merasa yakin terhadap kemampuan Anda dalam menangani masalah pribadi?</label><br>
                    
                    <p><input type="radio" id="jawaban4-sering" name="jawaban4" value="sering" class="form-radio-input">Sering</p>

                    <p><input type="radio" id="jawaban4-kadang" name="jawaban4" value="kadang" class="form-radio-input">Kadang-kadang</p>

                    <p><input type="radio" id="jawaban4-tidak-pernah" name="jawaban4" value="tidak pernah" class="form-radio-input">Tidak Pernah</p>
                    
                    <br>

                    <label for="soal5">5. Dalam sebulan terakhir, seberapa sering Anda merasa bahwa segala sesuatu berjalan sesuai keinginan Anda?</label><br>
                    
                    <p><input type="radio" id="jawaban5-sering" name="jawaban5" value="sering" class="form-radio-input">Sering</p>

                    <p><input type="radio" id="jawaban5-kadang" name="jawaban5" value="kadang" class="form-radio-input">Kadang-kadang</p>

                    <p><input type="radio" id="jawaban5-tidak-pernah" name="jawaban5" value="tidak pernah" class="form-radio-input">Tidak Pernah</p>

                    <br>

                    <label for="soal6">6. Dalam sebulan terakhir, seberapa sering Anda menemukan bahwa Anda tidak dapat mengatasi segala hal yang harus dilakukan?</label><br>
                    
                    <p><input type="radio" id="jawaban6-sering" name="jawaban6" value="sering" class="form-radio-input">Sering</p>

                    <p><input type="radio" id="jawaban6-kadang" name="jawaban6" value="kadang" class="form-radio-input">Kadang-kadang</p>

                    <p><input type="radio" id="jawaban6-tidak-pernah" name="jawaban6" value="tidak pernah" class="form-radio-input">Tidak Pernah</p>

                    <br>

                    <label for="soal7">7. Dalam sebulan terakhir, seberapa sering Anda mampu mengendalikan hal-hal yang mengganggu dalam hidup Anda?</label><br>
                    
                    <p><input type="radio" id="jawaban7-sering" name="jawaban7" value="sering" class="form-radio-input">Sering</p>

                    <p><input type="radio" id="jawaban7-kadang" name="jawaban7" value="kadang" class="form-radio-input">Kadang-kadang</p>

                    <p><input type="radio" id="jawaban7-tidak-pernah" name="jawaban7" value="tidak pernah" class="form-radio-input">Tidak Pernah</p>

                    <br>

                    <label for="soal8">8. Dalam sebulan terakhir, seberapa sering Anda merasa bahwa Anda dapat mengendalikan hal-hal dalam hidup Anda?</label><br>
                    
                    <p><input type="radio" id="jawaban8-sering" name="jawaban8" value="sering" class="form-radio-input">Sering</p>

                    <p><input type="radio" id="jawaban8-kadang" name="jawaban8" value="kadang" class="form-radio-input">Kadang-kadang</p>

                    <p><input type="radio" id="jawaban8-tidak-pernah" name="jawaban8" value="tidak pernah" class="form-radio-input">Tidak Pernah</p>

                    <br>

                    <label for="soal9">9. Dalam sebulan terakhir, seberapa sering Anda merasa marah karena hal-hal yang terjadi di luar kendali Anda?</label><br>
                    
                    <p><input type="radio" id="jawaban9-sering" name="jawaban9" value="sering" class="form-radio-input">Sering</p>

                    <p><input type="radio" id="jawaban9-kadang" name="jawaban9" value="kadang" class="form-radio-input">Kadang-kadang</p>

                    <p><input type="radio" id="jawaban9-tidak-pernah" name="jawaban9" value="tidak pernah" class="form-radio-input">Tidak Pernah</p>

                    <br>

                    <label for="soal10">10. Dalam sebulan terakhir, seberapa sering Anda merasa ada berbagai kesulitan yang menumpuk begitu banyak sehingga Anda tidak dapat mengatasinya?</label><br>
                    
                    <p><input type="radio" id="jawaban10-sering" name="jawaban10" value="sering" class="form-radio-input">Sering</p>

                    <p><input type="radio" id="jawaban10-kadang" name="jawaban10" value="kadang" class="form-radio-input">Kadang-kadang</p>

                    <p><input type="radio" id="jawaban10-tidak-pernah" name="jawaban10" value="tidak pernah" class="form-radio-input">Tidak Pernah</p>
                  </div>

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class= "footer">
                  <marquee direction="right" scrollamount="10">Tes diambil dari satupersen.net</marquee>
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
