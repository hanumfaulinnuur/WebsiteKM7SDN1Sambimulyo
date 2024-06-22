  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('/') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- Menu Rekap Siswa -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people-fill"></i><span>Rekap Data Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('siswa.index') }}">
              <i class="bi bi-circle"></i><span>List Daftar Siswa</span>
            </a>
          </li>
          <li>
            <a href="{{ route('siswa.create') }}">
              <i class="bi bi-circle"></i><span>Tambah Data Siswa</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- Menu Rekap Siswa -->
      
      <!-- Menu Rekap Guru -->
      <li class="nav-item"> 
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-rolodex"></i><span>Rekap Data Guru</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('guru.index') }}">
              <i class="bi bi-circle"></i><span>List Daftar Guru</span>
            </a>
          </li>
          <li>
            <a href="{{ route('guru.create') }}">
              <i class="bi bi-circle"></i><span>Tambah Data Guru</span>
            </a>
          </li>
        </ul>
      </li><!-- Menu Rekap Guru -->
    </ul>
  </aside>