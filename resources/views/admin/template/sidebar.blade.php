<div class="l-navbar show" id="nav-bar">
    <nav class="nav">
        <div> <a href="#" class="nav_logo mb-3"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">ADMIN <br> PMB POLHAS</span> </a>
            <div class="nav_list"> 
                <a href="/admin/pendaftar" class="nav_link {{ Request::is('*/pendaftar*') ? 'active' : '' }}"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                <a href="/admin/pesan" class="nav_link {{ Request::is('*/pesan*') ? 'active' : '' }}"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Pesan</span> </a> 
                <a href="#" class="nav_link"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Organisasi</span> </a> 
                <a href="/admin/rekomendasi" class="nav_link {{ Request::is('*/rekomendasi*') ? 'active' : '' }}"> <i class='bx bx-star nav_icon'></i> <span class="nav_name">Rekomendasi</span> </a> 
                <a href="/admin/prodi" class="nav_link {{ Request::is('*/prodi*') ? 'active' : '' }}"> <i class='bx bx-book-bookmark nav_icon'></i> <span class="nav_name">Prodi</span> </a> 
                <a href="/admin/kelas" class="nav_link {{ Request::is('*/kelas*') ? 'active' : '' }}"> <i class='bx bx-book-reader nav_icon'></i> <span class="nav_name">Kelas</span> </a> 
                <a href="/admin/seleksi" class="nav_link pb-1 {{ Request::is('*/seleksi*') ? 'active' : '' }}"> <i class='bx bx-bookmarks nav_icon'></i> <span class="nav_name">Pengumuman <br> Seleksi</span> </a> 
                <a href="/admin/kontak" class="nav_link {{ Request::is('*/kontak*') ? 'active' : '' }}"> <i class='bx bx-phone nav_icon'></i> <span class="nav_name">Kontak</span> </a> 
                <a href="/admin/pengaturan" class="nav_link {{ Request::is('*/pengaturan*') ? 'active' : '' }}"> <i class='bx bx-cog nav_icon'></i> <span class="nav_name">Pengaturan</span> </a> 
            </div>
        </div> <a href="{{ route('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
    </nav>
</div>