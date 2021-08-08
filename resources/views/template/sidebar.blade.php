<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="dist/img/Logo.png" alt="SMKN 2 Bandung Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Pembayaran SPP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional)
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>
        -->
    
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <!--  Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->level === 'admin')
                        <li class="nav-item menu-closed">
                            <a href="#" class="nav-link active">
                              <i class="nav-icon fas fa-edit"></i>
                              <p>
                                Menu Admin
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="siswa" class="nav-link">
                                        <i class="far fa-user nav-icon"></i>
                                        <p>CRUD Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="petugas" class="nav-link">
                                        <i class="far fa-user nav-icon"></i>
                                        <p>CRUD Petugas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="kelas" class="nav-link">
                                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                                        <p>CRUD Kelas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="spp" class="nav-link">
                                        <i class="far fa-credit-card nav-icon"></i>
                                        <p>CRUD SPP</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-closed">
                            <a href="#" class="nav-link inactive">
                              <i class="nav-icon fas fa-clipboard-list"></i>
                              <p>
                                Transaksi & Riwayat
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="transaksi" class="nav-link">
                                        <i class="far fa-clipboard nav-icon"></i>
                                        <p>Transaksi Pembayaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="historyPembayaran" class="nav-link">
                                        <i class="fas fa-history nav-icon"></i>
                                        <p>Riwayat Pembayaran</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <li class="nav-item">
                        <a href="laporan" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Buat Laporan</p>
                        </a>
                    </li>
                        @elseif (Auth::user()->level === 'petugas')
                            <li class="nav-item menu-closed">
                                <a href="#" class="nav-link active">
                                  <i class="nav-icon fas fa-clipboard-list"></i>
                                  <p>
                                    Transaksi & Riwayat
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/transaksi" class="nav-link">
                                            <i class="far fa-clipboard nav-icon"></i>
                                            <p>Transaksi Pembayaran</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="historyPembayaran" class="nav-link">
                                            <i class="fas fa-history nav-icon"></i>
                                            <p>Riwayat Pembayaran</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @elseif (Auth::user()->level === 'siswa')
                            <li class="nav-item">
                                <a href="historyPembayaran" class="nav-link">
                                    <i class="fas fa-history nav-icon"></i>
                                    <p>Riwayat Pembayaran</p>
                                </a>
                            </li>
                        @endif
                    @else
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                @endif
            </ul>    
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    <!-- /.sidebar -->
</aside>