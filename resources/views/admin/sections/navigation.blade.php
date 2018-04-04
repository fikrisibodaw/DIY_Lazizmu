<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('admin.dashboard') }}" class="site_title">
                <span>{{ config('app.name') }}</span>
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ auth()->user()->avatar }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <h2>{{ auth()->user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>
        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>Menu Utama</h3>
              <ul class="nav side-menu">
                <li>
                  <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard" aria-hidden="true"></i>
                      Dashboard
                  </a>
                </li>
              </ul>

              <!--<ul class="nav side-menu">
                <li>
                  <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard" aria-hidden="true"></i>
                      Belajar
                  </a>
                </li>
              </ul>-->

              <ul class="nav side-menu">
                <li>
                  <a>
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        Pengumuman
                      <span class="fa fa-chevron-down"></span>
                  </a>
                    <ul class="nav child_menu">
                      <li>
                        <a href="{{ route('log-viewer::dashboard') }}">
                          Lihat Pengumuman
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('log-viewer::dashboard') }}">
                          Buat Pengumuman
                        </a>
                      </li>
                    </ul>
                </li>
              </ul>

              <ul class="nav side-menu">
                <li>
                  <a>
                    <i class="fa fa-cog"></i>
                        Setelan
                      <span class="fa fa-chevron-down"></span>
                  </a>
                    <ul class="nav child_menu">
                      <li>
                        <a href="{{ route('log-viewer::dashboard') }}">
                            Buat Akun
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('log-viewer::logs.list') }}">
                            Ubah Profil
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('log-viewer::logs.list') }}">
                            Ganti Kata Sandi
                        </a>
                      </li>
                    </ul>
                </li>
              </ul>
          </div>
        </div>
        <!-- /sidebar menu -->

    </div>
</div>
