<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="/admin" class="site_title"> <span>Dashboard Admin</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src=" /images/{{ Auth::user()->photo }} " alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Selamat Datang,</span>
          <h2>{{ Auth::user()->name }}</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        {{-- Admin --}}
        <div class="menu_section">
          <h3>Admin</h3>
          <ul class="nav side-menu">
            
            <li><a href="/admin"><i class="fa fa-home"></i>Halaman Utama</a></li>
            
            <li><a href="/admin/visions"><i class="fa fa-eye"></i>Visi Misi</a></li>

            <li><a href="/admin/history"><i class="fa fa-history"></i>Sejarah</a></li>
            
            <li><a href="/admin/achievements"><i class="fa fa-trophy"></i>Prestasi</a></li>

            <li><a href="/admin/blogs"><i class="fa fa-newspaper-o"></i>Berita</a></li>

            <li><a href="/admin/extracurriculars"><i class="fa fa-futbol-o"></i>Ekstrakurikuler</a></li>
            
            <li><a><i class="fa fa-users"></i> Karyawan <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                  <li><a href="/admin/employees">Data Karyawan</a></li>
                <li><a href="/admin/employee_categories">Kategori Karyawan</a></li>
              </ul>
            </li>
            
            <li><a href="/admin/albums"><i class="fa fa-book"></i>Album</a></li>
            
          </ul>
        </div>
        {{-- end Admin --}}
        @can('isSuperAdmin')
          {{-- Super Admin --}}
          <div class="menu_section">
            <h3>Super Admin</h3>
            <ul class="nav side-menu">
              <li><a href=" {{route('homes.index')}} "><i class="fa fa-home"></i>Tambah Home</a></li>
              {{-- <li><a href=" /admin/homes "><i class="fa fa-home"></i>Tambah Home</a></li> --}}
              <li><a href=" {{route('users.index')}} "><i class="fa fa-user"></i>Users</a></li>
            </ul>
          </div>
          {{-- end Super Admin --}}  
        @endcan
        
      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" 
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
      <!-- /menu footer buttons -->
    </div>
</div>