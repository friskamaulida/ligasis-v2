<style>
    .header-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .header-address,
    .header-email {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 14px;
        color: white;
    }

    .header-email a {
        color: white;
        text-decoration: none;
    }

    .header-social {
        display: flex;
        justify-content: flex-end;
    }

    .social-icon {
        list-style: none;
        display: flex;
        gap: 10px;
        padding: 0;
        margin: 0;
    }

    .social-icon-link {
        font-size: 18px;
        color: white;
        padding: 4px;
        border-radius: 30%;
        background-color: rgba(255, 255, 255, 0.2);
        transition: background-color 0.3s ease;
    }

    .social-icon-link:hover {
        background-color: rgba(255, 255, 255, 0.4);
    }

    .site-header {
        background-color: #0e5286; /* tambahkan warna background agar icon terlihat */
        padding: 10px 0;
    }

    .logo {
        height: 50px;
    }
</style>

<header class="site-header">
    <div class="container">
        <div class="header-bar">
            <div class="d-flex flex-wrap align-items-center">
                <a href="{{ url('/') }}" class="navbar-brand me-4 d-flex align-items-center gap-2 text-white">
                    <img src="{{ asset('images/logo-ligasis.png') }}" style="height:65px" class="logo" alt="ligasis">
                    <span>
                        <strong class="d-block">SDN 1 Linggasari</strong>
                        <small>Sistem Informasi LIGASIS</small>
                    </span>
                </a>

                <p class="header-address d-flex me-4 mb-0">
                    <i class="bi-geo-alt me-2"></i>
                    Jalan Insinyur Haji Djuanda No.84 Ciamis, Jawa Barat
                </p>

                <p class="header-email d-flex mb-0">
                    <i class="bi-envelope me-2"></i>
                    <a href="mailto:satulinggasari@gmail.com">
                        satulinggasari@gmail.com
                    </a>
                </p>
            </div>

            <div class="header-social">
                <ul class="social-icon">
                    <li><a href="#" class="social-icon-link bi-facebook" target="_blank"></a></li>
                    <li><a href="#" class="social-icon-link bi-instagram" target="_blank"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCpIMtBk3G2bw-dsFpf4lDcQ" class="social-icon-link bi-youtube" target="_blank"></a></li>
                    <li><a href="#" class="social-icon-link bi-whatsapp" target="_blank"></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
