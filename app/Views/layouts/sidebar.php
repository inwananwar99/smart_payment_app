
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li class="active">
            <a href="<?= base_url('/alternatif')?>">
              <i class="bi bi-circle"></i><span>Alternatif</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('/kriteria')?>">
              <i class="bi bi-circle"></i><span>Kriteria</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Batas</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>SMART Method</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href=<?= base_url('/kuartal');?>>
              <i class="bi bi-circle"></i><span>Kuartal</span>
            </a>
          </li>
          <li>
            <a href=<?= base_url('/penilaian');?>>
              <i class="bi bi-circle"></i><span>Penilaian</span>
            </a>
          </li>
          <li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Laporan</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- End Forms Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->