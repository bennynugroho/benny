<div class="l-navbar show" id="nav-bar">
    <nav class="nav">
        <div> <a href="#" class="nav_logo mb-3"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">ADMIN <br> PMB POLHAS</span> </a>
            <div class="nav_list"> 
                <a href="/admin/dashboard" class="nav_link {{ Request::is('*/dashboard*') ? 'active' : '' }}"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                <a href="/admin/pesan" class="nav_link {{ Request::is('*/pesan*') ? 'active' : '' }}"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Pesan</span> </a> 
                <a href="#" class="nav_link"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Organisasi</span> </a> 
                <a href="/admin/rekomendasi {{ Request::is('*/rekomendasi*') ? 'active' : '' }}" class="nav_link"> <i class='bx bx-star nav_icon'></i> <span class="nav_name">Rekomendasi</span> </a> 
                <a href="/admin/kurikulum" class="nav_link {{ Request::is('*/kurikulum*') ? 'active' : '' }}"> <i class='bx bx-book-bookmark nav_icon'></i> <span class="nav_name">Kurikulum</span> </a> 
                <a href="/admin/seleksi" class="nav_link pb-1 {{ Request::is('*/seleksi*') ? 'active' : '' }}"> <i class='bx bx-bookmarks nav_icon'></i> <span class="nav_name">Pengumuman <br> Seleksi</span> </a> 
                <a href="/admin/kontak" class="nav_link {{ Request::is('*/kontak*') ? 'active' : '' }}"> <i class='bx bx-phone nav_icon'></i> <span class="nav_name">Kontak</span> </a> 
                <a href="/admin/pengaturan" class="nav_link {{ Request::is('*/pengaturan*') ? 'active' : '' }}"> <i class='bx bx-cog nav_icon'></i> <span class="nav_name">Pengaturan</span> </a> 
            </div>
        </div> <a href="{{ route('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
    </nav>
</div>