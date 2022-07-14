    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url("assets/img/imigrasi1.png")?>" height="42" width="42">
        </div>
        <div class="sidebar-brand-text mx-3">IMI_KDR<sup>SII</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('maincontrol/index');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        INFORMASI
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-list-ol"></i>
          <span>BUKU TAMU</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('maincontrol/entrytamu');?>">ENTRY DATA TAMU</a>
            <a class="collapse-item" href="<?php echo site_url('maincontrol/rekaptamu');?>">REKAP DATA TAMU</a>
            <a class="collapse-item" href="<?php echo site_url('maincontrol/laporantamu');?>">LAPORAN DATA TAMU</a>
          </div>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitie" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-list-ol"></i>
          <span>PENGADUAN</span>
        </a>
        <div id="collapseUtilitie" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('maincontrol/entrypengaduan');?>">ENTRY DATA PENGADUAN</a>
            <a class="collapse-item" href="<?php echo site_url('maincontrol/rekappengaduan');?>">REKAP DATA PENGADUAN</a>
            <a class="collapse-item" href="<?php echo site_url('maincontrol/laporanpengaduan');?>">LAPORAN DATA PENGADUAN</a>
          </div>
        </div>
      </li>


      <div class="sidebar-heading">
        REKAP JUMLAH PERMOHONAN
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtiliti" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-list-ol"></i>
          <span>PASPOR WNI</span>
        </a>
        <div id="collapseUtiliti" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('maincontrol/entrypaspor');?>">ENTRY DATA PASPOR</a>
            <a class="collapse-item" href="<?php echo site_url('maincontrol/rekappaspor');?>">REKAP DATA PASPOR</a>
            <a class="collapse-item" href="<?php echo site_url('maincontrol/laporanpaspor');?>">LAPORAN DATA PASPOR</a>
          </div>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilit" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-list-ol"></i>
          <span>BAP</span>
        </a>
        <div id="collapseUtilit" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('maincontrol/entrywalkin');?>">ENTRY DATA BAP</a>
            <a class="collapse-item" href="<?php echo site_url('maincontrol/rekapwalkin');?>">REKAP DATA BAP</a>
            <a class="collapse-item" href="<?php echo site_url('maincontrol/laporanwalkin');?>">LAPORAN DATA BAP</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtili" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-list-ol"></i>
          <span>WNA (ASING)</span>
        </a>
        <div id="collapseUtili" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('maincontrol/entrywalkin');?>">ENTRY DATA WNA</a>
            <a class="collapse-item" href="<?php echo site_url('maincontrol/rekapwalkin');?>">REKAP DATA WNA</a>
            <a class="collapse-item" href="<?php echo site_url('maincontrol/laporanwalkin');?>">LAPORAN DATA WNA</a>
          </div>
        </div>
      </li>


     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>