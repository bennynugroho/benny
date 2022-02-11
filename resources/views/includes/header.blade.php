<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo"><img src="{{ asset('assets/img/picture/logo_polihasnur_3.png') }}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('*/') ? 'active' : '' }}" href="/">Beranda</a></li>
                <li class="dropdown"><a href="{{ route('pendaftaran.index') }}" class="{{ Request::is('*/pendaftaran*') ? 'active' : '' }}"><span>Pendaftaran</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('pendaftaran.index') }}#alur">Alur PMB</a></li>
                        <li><a href="{{ route('pendaftaran.index') }}#biaya">Biaya PMB</a></li>
                        <li><a href="{{ route('pendaftaran.create') }}">Daftar</a></li>
                        <li><a href="{{ $formulir->getPath }}" target="_blank">Download Formulir Pendaftaran</a></li>
                        <li><a href="#">Pengumuman Seleksi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="/jalur-masuk" class="{{ Request::is('*/jalur-masuk*') ? 'active' : '' }}"><span>Jalur Masuk</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach ($jalur as $jlr)
                            <li><a href="#">{{ $jlr->judul }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown"><a href="/prodi" class="{{ Request::is('*/prodi*') ? 'active' : '' }}"><span>Prodi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach ($prodi as $pro)
                            <li><a href="#">{{ $pro->nama }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a class="nav-link scrollto {{ Request::is('*/hubungi*') ? 'active' : '' }}" href="/hubungi">Hubungi</a></li>
                <li><a class="getstarted scrollto" href="{{ route('pendaftaran.create') }}">Daftar Sekarang</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>