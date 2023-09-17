    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="{{ asset('template') }}/assets/images/logo/logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed {{ Request::is('/') ? 'active' : '' }}"
                                            href="{{ route('home') }}" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class=" dd-menu collapsed {{ Request::is('lacak*') ? 'active' : '' }}"
                                            href="javascript:void(0)" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Berkas</a>
                                        <ul class="sub-menu collapse" id="submenu-1-1">
                                            <li class="nav-item {{ Request::is('berkas.create') ? 'active' : '' }}">
                                                <a href="{{ route('berkas.create') }}">Upload Berkas</a>
                                            </li>
                                            <li class="nav-item {{ Request::is('lacak') ? 'active' : '' }}">
                                                <a href="{{ route('lacak') }}">Lacak Berkas</a>
                                            </li>

                                    </li>
                                </ul>

                                <li class="nav-item">
                                    <a class=" dd-menu collapsed {{ Request::is('tentang*') ? 'active' : '' }}"
                                        href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1-1"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">Tentang Kami</a>
                                    <ul class="sub-menu collapse" id="submenu-1-1">
                                        <li class="nav-item {{ Request::is('tentang.sekilas') ? 'active' : '' }}">
                                            <a href="{{ route('tentang.sekilas') }}">Sekilas</a>
                                        </li>
                                        <li class="nav-item {{ Request::is('tentang.visi.misi') ? 'active' : '' }}">
                                            <a href="{{ route('tentang.visi.misi') }}">Visi&Misi</a>
                                        </li>
                                        <li class="nav-item {{ Request::is('tentang.struktur') ? 'active' : '' }}"><a
                                                href="{{ route('tentang.struktur') }}">Struktur Organisasi</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed {{ Request::is('kontak*') ? 'active' : '' }}"
                                        href="{{ route('kontak.kami') }}" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">Kontak Kami</a>
                                </li>
                            </div> <!-- navbar collapse -->
                            <div class="login-button">
                                @if (Route::has('login'))
                                    <ul>
                                        @auth
                                            @if (Auth::user()->role == 'admin')
                                                <li>
                                                    <a href="/admin"><i class="lni lni-user"></i>
                                                        Dashboard {{ Auth::user()->name }}
                                                    </a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="/"><i class="lni lni-user"></i>
                                                        {{ Auth::user()->name }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="lni lni-enter" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        <strong>{{ __('Logout') }}</strong>
                                                    </a>
                                                </li>
                                            @endif
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                        @else
                                            <li>
                                                <a href="{{ route('login') }}"><i class="lni lni-enter"></i>Masuk</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('register') }}"><i class="lni lni-user"></i> Daftar</a>
                                            </li>
                                        @endauth
                                    </ul>
                                @endif
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
