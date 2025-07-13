<style>
.site-header {
    background-color: #1d2e62;
    padding: 10px 0;
    color: white;
}

.header-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.header-info {
    display: flex;
    align-items: center;
    gap: 2rem;
    flex-wrap: wrap;
    color: white;
}

.header-logo {
    display: flex;
    align-items: center;
    gap: 10px;
    color: white;
    text-decoration: none;
}

.header-logo img.logo {
    height: 65px;
}

.header-logo strong {
    font-size: 16px;
}

.header-logo small {
    font-size: 13px;
    display: block;
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
    padding: 8px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.2);
    transition: background-color 0.3s ease;
}

.social-icon-link:hover {
    background-color: rgba(255, 255, 255, 0.4);
}

/* Responsive */
@media (max-width: 768px) {
    .header-bar {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .header-info {
        justify-content: center;
    }

    .header-social {
        justify-content: center;
        margin-top: 15px;
    }
}

</style>
<header class="site-header">
    <div class="container">
        <div class="header-bar">
            <!-- Kiri: Info -->
            <div class="header-info">
                <a href="/" class="header-logo">
                    <img src="images/tt.png" class="logo" alt="ligasis">
                    <div>
                        <strong>SDN 1 Linggasari</strong><br>
                        <small>Sistem Informasi LIGASIS</small>
                    </div>
                </a>

                <div class="header-address">
                    <i class="bi bi-geo-alt"></i>
                    <span>Jalan Insinyur Haji Djuanda No.84 Ciamis, Jawa Barat</span>
                </div>

                <div class="header-email">
                    <i class="bi bi-envelope"></i>
                    <a href="mailto:satulinggasari@gmail.com">satulinggasari@gmail.com</a>
                </div>
            </div>

            <!-- Kanan: Sosmed -->
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
