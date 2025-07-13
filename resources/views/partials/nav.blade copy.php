<style>
    /* ===== Navbar Container ===== */
#mainNavbar {
    background-color: #e5ff00 !important;
    padding: -3px 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* ===== Navbar Links ===== */
.navbar-nav .nav-link {
    color: #333;
    font-weight: 500;
    margin-right: 15px;
    transition: color 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #007bff;
}

/* ===== Login Button ===== */
.custom-btn {
    padding: 6px 16px;
    border: 2px solid #007bff;
    color: #007bff;
    font-weight: 500;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.custom-btn:hover {
    background-color: #007bff;
    color: white;
}

/* ===== Navbar Layout: Left Menu + Right Button ===== */
#navbarNav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

/* ===== Responsive ===== */
@media (max-width: 992px) {
    #navbarNav {
        flex-direction: column;
        align-items: flex-start;
    }

    .navbar-nav {
        width: 100%;
    }

    .nav-item {
        margin-bottom: 10px;
    }

    .custom-btn {
        margin-top: 10px;
        align-self: flex-end;
    }
}

</style>
        <nav id="mainNavbar" class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-flex justify-content-between align-items-center" id="navbarNav">
                    <!-- Menu kiri -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link click-scroll" href="/">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link click-scroll" href="/tentang">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link click-scroll" href="/news">Berita</a></li>
                        <li class="nav-item"><a class="nav-link click-scroll" href="/ppdb">PPDB</a></li>
                        <li class="nav-item"><a class="nav-link click-scroll" href="/maintenance">Akademik</a></li>
                        <li class="nav-item"><a class="nav-link click-scroll" href="/maintenance">E-Learning</a></li>
                        <li class="nav-item"><a class="nav-link click-scroll" href="/maintenance">Perpustakaan</a></li>
                        <li class="nav-item"><a class="nav-link click-scroll" href="/kontak">Kontak</a></li>
                    </ul>

                    <!-- Tombol kanan -->
                    <div class="nav-item">
                        <a class="nav-link custom-btn custom-border-btn btn" href="/ligasis" target="_blank">Login</a>
                    </div>
                </div>
            </div>
        </nav>


        <script>
  function updateNavbarClass() {
    const navbar = document.getElementById('mainNavbar');
    const currentExpand = navbar.classList.contains('navbar-expand-lg') ? 'navbar-expand-lg' : 'navbar-expand-xl';

    if (window.innerWidth >= 1400) {
      if (currentExpand !== 'navbar-expand-lg') {
        navbar.classList.remove('navbar-expand-xl');
        navbar.classList.add('navbar-expand-lg');
      }
    } else {
      if (currentExpand !== 'navbar-expand-xl') {
        navbar.classList.remove('navbar-expand-lg');
        navbar.classList.add('navbar-expand-xl');
      }
    }
  }

  window.addEventListener('load', updateNavbarClass);
  window.addEventListener('resize', updateNavbarClass);
</script>


