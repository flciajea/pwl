<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="{{ asset('dashboard/index.html') }}" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="{{ asset('assets/images/logo-dark.svg') }}" class="img-fluid logo-lg" alt="logo">
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="{{ asset('dashboard/index.html') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>  
        <li class="pc-item pc-caption">
          <label>Pages</label>
          <i class="ti ti-news"></i>
        </li>
        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
                <span class="pc-micon"><i class="ti ti-lock"></i></span>
                <span class="pc-mtext">Pengajuan Surat</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            </a>
            <ul class="pc-submenu">
            <a class="pc-link" href="{{ route('mahasiswa.surat.keterangan-aktif') }}">
                Surat Keterangan Mahasiswa Aktif
            </a>
            </li>
            <li class="pc-item">
              <a class="pc-link" href="{{ route('mahasiswa.surat.pengantar-tugas') }}">Surat Pengantar Tugas Mata Kuliah</a>
            </li>
            <li class="pc-item">
              <a class="pc-link" href="{{ route('mahasiswa.surat.keterangan-lulus') }}">Surat Keterangan Lulus</a>
            </li>
            <li class="pc-item">
              <a class="pc-link" href="{{ route('mahasiswa.surat.laporan-hasil-studi') }}">Laporan Hasil Studi</a>
            </li>
            
            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
