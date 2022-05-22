@if (Auth::check())
<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li class="has-submenu">
                    <a href="/home"><i class="mdi mdi-home"></i>Home</a>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="mdi mdi-newspaper"></i>Manajemen Web</a>
                    <ul class="submenu">
                        <li><a href="/informasi/berita">Berita</a></li>
                        <li><a href="/informasi/kategori">Kategori</a></li>
                        <li><a href="/informasi/slider">Slider</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="fas fa-align-justify"></i>Data Master</a>
                    <ul class="submenu">
                        <li><a href="/data/administrator">Data Administrator</a></li>
                        <li><a href="/data/profil">Profil Perusahaan</a></li>
                        @if (Auth::user()->name = 'superadmin')
                        <li><a href="/data/gantipassword">Ganti Password</a></li>
                        @else
                        <li><a href="/data/pengguna">Pengguna</a></li>
                        @endif
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="fas fa-file"></i>Laporan</a>
                    <ul class="submenu">
                        <li><a href="/laporan/administrator">Data Administrator</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="/logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>
            </ul>
        </div> <!-- end #navigation -->
    </div> <!-- end container -->
</div>
@else
<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li class="has-submenu">
                    <a href="/"><i class="mdi mdi-home"></i>Beranda</a>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="fas fa-list"></i>Kategori</a>
                    <ul class="submenu">
                        @foreach (kategori() as $item)
                        <li><a href="/kategori/{{$item->id}}/berita">{{$item->nama}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="/artikel"><i class="fas fa-archive"></i>Berita </a>
                </li>
                <li class="has-submenu">
                    <a href="/profil"><i class="fas fa-user"></i>Profil Perusahaan</a>
                </li>
                <li class="has-submenu">
                    <a href="/login"><i class="mdi mdi-key"></i>Login</a>
                </li>

            </ul>
            <!-- End navigation menu -->
        </div> <!-- end #navigation -->
    </div> <!-- end container -->
</div>
@endif