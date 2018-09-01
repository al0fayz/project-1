<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::asset('images/'.Auth::user()->foto) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->nama  }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{URL::to('dashboard')}}"><i class="fa fa-circle-o"></i>Beranda</a></li>
            <li><a href="{{URL::to('info')}}"><i class="fa fa-circle-o"></i>Info/Berita</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Administrator</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('user')}}"><i class="fa fa-circle-o"></i> User</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Menu Utama</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('desa')}}"><i class="fa fa-circle-o"></i> Desa</a></li>
			<li><a href="{{URL::to('pegawai')}}"><i class="fa fa-circle-o"></i> Pegawai Desa</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Dokumen</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('do')}}"><i class="fa fa-circle-o"></i>Dokumen Domisili</a></li>
            <li><a href="{{URL::to('us')}}"><i class="fa fa-circle-o"></i>Dokumen Usaha</a></li>
            <li><a href="{{URL::to('ktpdoc')}}"><i class="fa fa-circle-o"></i>Dokumen Ktp</a></li>
			<li><a href="{{URL::to('dsudoc')}}"><i class="fa fa-circle-o"></i>Dokumen Domisili Perusahaan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('cha')}}"><i class="fa fa-circle-o"></i> Chart</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('pegawai/cetak')}}"><i class="fa fa-circle-o"></i> Laporan Pegawai</a></li>
			<li><a href="{{URL::to('desa/cetak')}}"><i class="fa fa-circle-o"></i> Laporan Desa</a></li>
          </ul>
        </li>
        <li>
          <a href="{{URL::to('pesan')}}">
            <i class="fa fa-envelope"></i> <span>Pesan Masyarakat</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">new</small>
            </span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>