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
            class="border-bottom border-primary d-flex justify-content-between mx-lg-10 px-lg-0 w-100 px-3 py-4 text-center">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('gorseller/logo.png') }}" style="height: 50px;" alt="logo">
            </a>
            <div class="align-items-lg-center d-lg-flex d-none">
                <ul class="align-items-lg-center navbar-nav mx-auto border-0">

                    <li class="nav-item">
                        <a class="fw-semibold nav-link" href="{{ route('home') }}"> Anasayfa </a>
                    </li>

                    <li class="dropdown menu-item-has-children nav-item">
                        <a class="fw-semibold nav-link" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"> Hakkımızda </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/biz-kimiz">Biz Kimiz</a></li>
                            <li><a class="dropdown-item" href="/ekibimiz">Ekibimiz</a></li>
                            <li><a class="dropdown-item" href="/basarilarimiz">Başarılarımız</a></li>

                            <li><a class="dropdown-item" href="/sponsorlarimiz">Sponsorlarımız</a></li>
                        </ul>
                    </li>
                    <li class="dropdown menu-item-has-children nav-item">
                        <a class="fw-semibold nav-link" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"> Takımlarımız </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/takim/valorant">Valorant</a></li>
                            <li><a class="dropdown-item" href="game-details.html">Counter Strike 2</a></li>
                            <li><a class="dropdown-item" href="game-details.html">FIFA</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="fw-semibold nav-link" href="/kariyer"> Oyuncu Başvurusu </a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-semibold nav-link" href="/blog"> Blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-semibold nav-link" href="/iletisim"> İletişim </a>
                    </li>
                </ul>
            </div>
            <a href="https://pcific.shop" class="btn btn-outline-primary d-md-block d-none"> PCIFIC Shop </a>
        </div>
    </nav>

    <!-- offCanvas-menu -->
    <div class="bg-black-2 offCanvas__info">
        <div class="menu-close offCanvas__close-icon">
            <button><i class="bi bi-x"></i></button>
        </div>
        <div class="mb-30 offCanvas__logo">
            <a href="{{ route('home') }}"><img src="assets/imgs/template/logo.svg" alt="Logo">
                <span class="ds-xs-6 fw-bold ms-2 text-white">
                    PCIFIC ESPOR
                </span></a>
        </div>
        <div class="mb-30 offCanvas__side-info">
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
        <div class="mt-30 offCanvas__social-icon">
            <a href="javascript:void(0)"><i class="bi bi-facebook"></i></a>
            <a href="javascript:void(0)"><i class="bi bi-twitter-x"></i></a>
            <a href="javascript:void(0)"><i class="bi bi-google"></i></a>
            <a href="javascript:void(0)"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
    <div class="offCanvas__overly"></div>



</header>
