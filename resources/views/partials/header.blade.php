
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
/* mantap */
</style>
        <header class="site-header">
            <div class="container">
                <div class="header-bar">


                    <div class="d-flex flex-wrap">
                        <a href="/" class="navbar-brand me-4 ">
                        <img src="images/logo-ligasis.png" class="logo" alt="ligasis">
                        <div>
                            <strong>SDN 1 Linggasari</strong><br>
                            <small>Sistem Informasi LIGASIS</small>
                        </div>
                        </a>
                        <p class="header-address d-flex me-4 mb-0">
                            <i class="bi-geo-alt me-2"></i>
                            Jalan Insinyur Haji Djuanda No.84 Ciamis, Jawa Barat
                        </p>

                        <p class="header-email d-flex mb-0">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:info@company.com">
                                satulinggasari@gmail.com
                            </a>
                        </p>
                    </div>

                    <div class="header-social">
                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>
                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                            <li><a href="https://www.youtube.com/channel/UCpIMtBk3G2bw-dsFpf4lDcQ" class="social-icon-link bi-youtube"></a></li>
                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

