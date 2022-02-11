<header class="" id="">
    <nav class="header navbar navbar-expand-lg navbar-light body-pd" id="header">
        <div class="container-fluid">
            <div class="header_toggle"> <i class='bx bx-x bx-menu' id="header-toggle"></i> </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><i class="bi bi-arrow-down-up"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item px-2">
                        <i class="bi bi-envelope-fill"></i>
                    </li>
                    <li class="nav-item px-2">
                        <a href="#" class="nav-link">{{ auth()->user()->nama }} <i class="bi bi-person-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>