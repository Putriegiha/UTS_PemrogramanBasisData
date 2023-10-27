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

    
    </ul>

  </aside><!-- End Sidebar-->