<div id="preloader">
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="loader-icon"><img src="{{ asset('gorseller/logo.png') }}" alt="Preloader"></div>
        </div>
    </div>
</div>

<header>
    <nav class="navbar navbar-expand-lg navbar-light w-100 z-3 p-0">
        <div
            class="d-flex justify-content-between w-100 text-center mx-lg-10 px-lg-0 px-3 py-4 border-bottom border-primary">
            <a class="navbar-brand" href="anasayfa">
                <img src="{{ asset('gorseller/logo.png') }}" style="height: 50px;" alt="logo">
            </a>
            <div class="align-items-lg-center d-none d-lg-flex">
                <ul class="navbar-nav align-items-lg-center mx-auto border-0">

                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="/anasayfa"> Anasayfa </a>
                    </li>

                    <li class="nav-item dropdown menu-item-has-children">
                        <a class="nav-link fw-semibold" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"> Hakkımızda </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/biz-kimiz">Biz Kimiz</a></li>
                            <li><a class="dropdown-item" href="/ekibimiz">Ekibimiz</a></li>
                            <li><a class="dropdown-item" href="/basarilarimiz">Başarılarımız</a></li>

                            <li><a class="dropdown-item" href="/sponsorlarimiz">Sponsorlarımız</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-item-has-children">
                        <a class="nav-link fw-semibold" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"> Takımlarımız </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/takim/valorant">Valorant</a></li>
                            <li><a class="dropdown-item" href="game-details.html">Counter Strike 2</a></li>
                            <li><a class="dropdown-item" href="game-details.html">FIFA</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="/kariyer"> Oyuncu Başvurusu </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="/blog"> Blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="/iletisim"> İletişim </a>
                    </li>
                </ul>
            </div>
            <a href="https://pcific.shop" class="btn btn-outline-primary d-none d-md-block"> PCIFIC Shop </a>
        </div>
    </nav>

    <!-- offCanvas-menu -->
    <div class="offCanvas__info bg-black-2">
        <div class="offCanvas__close-icon menu-close">
            <button><i class="bi bi-x"></i></button>
        </div>
        <div class="offCanvas__logo mb-30">
            <a href="anasayfa"><img src="assets/imgs/template/logo.svg" alt="Logo">
                <span class="ms-2 ds-xs-6 fw-bold text-white">
                    PCIFIC ESPOR
                </span></a>
        </div>
        <div class="offCanvas__side-info mb-30">
            <div class="contact-list mb-30">
                <h4>Adresimiz</h4>
                <p>Akdeniz Mah. Şehit Fethibey Cad. No: 66/B<br> Konak, İzmir</p>
            </div>

            <div class="contact-list mb-30">
                <h4>Telefon Numaramız</h4>
                <p>0850 </p>
            </div>

            <div class="contact-list mb-30">
                <h4>E-Posta Adresimiz</h4>
                <p>info@pcific.com</p>
            </div>
        </div>
        <div class="offCanvas__social-icon mt-30">
            <a href="javascript:void(0)"><i class="bi bi-facebook"></i></a>
            <a href="javascript:void(0)"><i class="bi bi-twitter-x"></i></a>
            <a href="javascript:void(0)"><i class="bi bi-google"></i></a>
            <a href="javascript:void(0)"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
    <div class="offCanvas__overly"></div>



</header>
