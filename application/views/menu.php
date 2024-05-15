  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/adminlte/dist/img/user2.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= site_url('user/profile') ?>" class="d-block"><?=ucfirst($this->fungsi->user_login()->nama)?> <p><b>(<?=ucfirst($this->fungsi->user_login()->status)?>)<br>Semester: <?=ucfirst($this->fungsi->user_login()->semester)?></br></p></b></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
     <?php if($this->session->userdata('level') == 3) : ?>
	   <b><li class="nav-header">Menu Mahasiswa</li></b>
          <li class="nav-item ">
            <a href="<?= site_url('crud/') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('crud/add') ?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('crud/view') ?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabel Mahasiswa
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Perkuliahan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('Krs/krs_aksi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KRS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Nilai/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KHS</p>
                </a>
              </li>
            </ul>
          </li>
            <?php if($this->session->userdata('semester') >= 5) : ?>
            <li class="nav-item">
            <a href="<?= site_url('crud/tts') ?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tes Tingkat Stress
              </p>
            </a>
          </li>
        <?php endif ?>
          
          
      <?php elseif($this->session->userdata('level') == 2) : ?>
      <b><li class="nav-header">Menu Dosen</li></b>
      <li class="nav-item ">
            <a href="<?= site_url('crud/') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-university"></i>
              <p>
                Perkuliahan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('Jurusan/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jurusan</p>
                </a>
              </li>
        <li class="nav-item">
                <a href="<?= site_url('Prodi/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Program Studi</p>
                </a>
              </li>
        <li class="nav-item">
                <a href="<?= site_url('Matakuliah/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mata Kuliah</p>
                </a>
              </li>
        <li class="nav-item">
                <a href="<?= site_url('tahun_akademik/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tahun Akademik</p>
                </a>
              </li>
        <li class="nav-item">
                <a href="<?= site_url('Krs/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KRS</p>
                </a>
              </li>
        <li class="nav-item">
                <a href="<?= site_url('Nilai/input_nilai') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Nilai</p>
                </a>
              </li>
        <li class="nav-item">
                <a href="<?= site_url('Nilai/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KHS</p>
                </a>
              </li>
        <!--<li class="nav-item">
                <a href="<?= site_url('Cetak/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cetak Transkripsi</p>
                </a>
              </li>
        <li class="nav-item">
                <a href="<?= site_url('Dosen/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dosen</p>
                </a>
              </li>
        </ul>
          </li>-->
		  <?php elseif($this->session->userdata('level') == 1) : ?>
		  <b><li class="nav-header">Menu Admin</li></b>
		   <li class="nav-item ">
            <a href="<?= site_url('crud/') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

       <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('crud/view_agm') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Agama</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?= site_url('crud/view_sts') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Status</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?= site_url('crud/view_akn') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Hak Akses</p>
                </a>
              </li>
			  </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('con_diagram/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grafik Data Agama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('con_diagram/diagram_line') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grafik Data Tanggal Lahir</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('con_diagram/diagram_pie') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grafik Jenis Kelamin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('con_diagram/diagram_bar') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grafik Data Prodi</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Form Admin
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('crud/add_agama') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Agama</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?= site_url('crud/add_status') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Status</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?= site_url('crud/add_akn') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Akun/Hak Akses</p>
                </a>
              </li>
			  </ul>
          </li>
		  <?php endif; ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>