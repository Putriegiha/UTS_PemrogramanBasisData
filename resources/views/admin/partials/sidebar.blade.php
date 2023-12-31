  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('role.index')}}">
              <i class="bi bi-circle"></i><span>Role Tables</span>
            </a>
          </li>
          <li>
            <a href="{{route('vendor.index')}}">
              <i class="bi bi-circle"></i><span>Vendor Tables</span>
            </a>
          </li>
          <li>
            <a href="{{route('user.index')}}">
              <i class="bi bi-circle"></i><span>User Tables</span>
            </a>
          </li>
          <li>
            <a href="{{route('barang.index')}}">
              <i class="bi bi-circle"></i><span>Barang Tables</span>
            </a>
          </li>
          <li>
            <a href="{{route('satuan.index')}}">
              <i class="bi bi-circle"></i><span>Satuan Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-coin"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('pengadaan.index')}}">
              <i class="bi bi-circle"></i><span>Pengadaan</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Penerimaan</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Retur</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

    
    </ul>

  </aside><!-- End Sidebar-->