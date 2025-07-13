<style>
    #mainNavbar {
    background-color: yellow !important;
    /* padding: -3px 0; */
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
}

</style>
        {{-- <nav id="mainNavbar" class="navbar navbar-expand-lg bg-light shadow-lg"> --}}
            <nav id="mainNavbar" class="navbar  bg-light shadow-lg">
            <div class="container">
                {{-- <a class="navbar-brand" href="/">
                    <img src="images/tt.png" class="logo img-fluid" alt="Kind Heart Charity">
                    <span>
                        SDN 1 Linggasari
                        <small>Sistem Informasi LIGASIS</small>
                    </span>
                </a> --}}

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="font-weight: 600">
                        <li class="nav-item dropdown">
                            <a class="nav-link  click-scroll" href="/">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/tentang">Tentang</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/news">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/ppdb">PPDB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/maintenance">Akademik</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/maintenance">E-Learning</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/maintenance">Perpustakaan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/kontak">Kontak</a>
                        </li>
                        {{-- <li class="nav-item ms-3 nav-login ">
                            <a class="nav-link custom-btn custom-border-btn btn" href="/ligasis" target="_blank">Login</a>
                        </li> --}}
                    </ul>
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link custom-btn custom-border-btn btn" href="/ligasis" target="_blank">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <script>
  function updateNavbarClass() {
    const navbar = document.getElementById('mainNavbar');
    const currentExpand = navbar.classList.contains('navbar-expand-lg') ? 'navbar-expand-lg' : 'navbar-expand-xl';

    if (window.innerWidth >= 1200) {
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


