@extends('layouts.app')

@section('title', 'Ana Sayfa')

@section('content')
    <!-- prettier-ignore -->
		<!-- Hero-2 -->
    <section class="section-hero-2 position-relative pt-160 overflow-hidden">
        <div class="scroll-move-right position-relative pb-160 pt-lg-150">
            <div
                class="d-flex align-items-center gap-5 wow img-custom-anim-top position-absolute top-50 start-50 translate-middle">
                <h3 class="stroke fs-300">PCIFIC ESPORTS</h3>
            </div>
        </div>
        <div class="container tg-heading-subheading animation-style3 pt-120">
            <div class="d-flex align-items-center section-news-2 mb-3">
                <span class="text-uppercase fw-bold text-primary fs-7 text-nowrap">pcific esports</span>
                <span class="line ms-4"></span>
            </div>
            <h2 class="text-end pb-80 Company updates">Takımlarımız</h2>
        </div>

        <div
            class="d-flex container-fluid flex-column flex-lg-row align-items-lg-end align-items-center justify-content-center gap-5 pb-160">


            <div class="card-hero-2 zoom-img px-2 px-md-0 position-relative">
                <div class="rounded-3 overflow-hidden">
                    <img class="w-100 wow img-custom-anim-left" src="{{ asset('gorseller/takim_3.jpg') }}"
                        alt="Pcific - CS 2 Takımı">
                </div>
                <div class="background-brand position-absolute bottom-0 start-0 z-0 w-100"></div>
                <div class="brand opacity-0 position-absolute bottom-0 start-0 p-5 w-100">
                    <p class="mb-2 mt-1 d-none d-md-block mb-4 ">
                        COUNTER STRIKE 2
                    </p>
                    <a href="/takimlar/cs2" class="btn btn-outline-primary"> İncele </a>
                </div>
            </div>

            <div class="card-hero-2 zoom-img px-2 px-md-0 position-relative">
                <div class="rounded-3 overflow-hidden">
                    <img class="w-100 wow img-custom-anim-left" src="{{ asset('gorseller/takim_2.jpg') }}"
                        alt="BBL Pcific - Valorant Takımı">
                </div>
                <div class="background-brand position-absolute bottom-0 start-0 z-0 w-100"></div>
                <div class="brand opacity-0 position-absolute bottom-0 start-0 p-5 w-100">
                    <p class="mb-2 mt-1 d-none d-md-block mb-4 ">
                        VALORANT
                    </p>
                    <a href="/takimlar/cs2" class="btn btn-outline-primary"> İncele </a>
                </div>
            </div>

            <div class="card-hero-2 zoom-img px-2 px-md-0 position-relative">
                <div class="rounded-3 overflow-hidden">
                    <img class="w-100 wow img-custom-anim-left" src="assets/{{ asset('gorseller/takim_1.jpg') }}"
                        alt="Pcific - FC 25 Takımı">
                </div>
                <div class="background-brand position-absolute bottom-0 start-0 z-0 w-100"></div>
                <div class="brand opacity-0 position-absolute bottom-0 start-0 p-5 w-100">
                    <p class="mb-2 mt-1 d-none d-md-block mb-4">
                        FC 25
                    </p>
                    <a href="/takimlar/cs2" class="btn btn-outline-primary"> İncele </a>
                </div>
            </div>

        </div>
    </section>

    <!--About 2-->
    <section class="section-about-2 pt-120 pb-250 overflow-hidden bg-black-2">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 position-relative pe-lg-10">
                    <h1 class="fs-150 large-letter d-none d-lg-block position-absolute">Hakkımızda</h1>
                    <span class="text-uppercase fw-bold text-primary fs-7">since from 2018</span>
                    <div class="tg-heading-subheading animation-style3">
                        <h2 class="position-relative tg-element-title">
                            Biz Kimiz?
                        </h2>
                    </div>
                    <p class="mt-4">Espor izleyerek büyüyen insanların, bu alanda emek vermek isteyen gençlere destek
                        olmak, alan tanımak ve yerel kültürle bütünleşik, herkesin ait hissedebildiği bir kulüp kurma fikri
                        ile yola çıkan PCIFIC Esports, 2018 yılında kuruldu.</p>


                    <div class="border-bottom border-white opacity-25 my-6"></div>
                    <div class="d-flex">
                        <a href="contact.html" class="btn btn-outline-primary">Hakkımızda</a>
                        <a href="telto:123456789" class="btn text-white ms-lg-3 ">Başarılarımız</a>
                    </div>

                    <div class="row justify-content-start mt-5">
                        <div
                            class="position-relative border border-primary border-opacity-25 icon_160 icon-shape rounded-circle shadow">
                            <img class="position-relative"
                                src="{{ asset('imgs/testimonials/testimonials-2/badge-icon.svg') }}"
                                alt="muzilla">
                            <div class="position-absolute top-10 start-50 translate-middle w-100">
                                <h6 class="circle-text rotateme">PCIFIC - ESPORTS - TEAM</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="position-relative d-inline-flex">
                        <img class="rounded-4" src="{{ asset('gorseller/takim2.jpg') }}" alt="muzilla">
                    </div>
                </div>
            </div>
        </div>


    </section>



    <!-- sponsors 2 -->
    <div class="section-sponsors-2">
        <div class="container-fluid pt-10 pb-10">

            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="#" class="brand d-flex align-items-center opacity-50">
                            <img src="https://pcific.shop/upload/1725636132-66db1e24acbba.png" alt="RM Istanbul">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="#" class="brand d-flex align-items-center opacity-50">
                            <img src="https://pcific.shop/upload/1725635361-66db1b21a5252.png" alt="Kabasakal Online">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="brand d-flex align-items-center opacity-50">
                            <img src="https://pcific.shop/upload/1725635448-66db1b78e738a.png" alt="X Prime">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="brand d-flex align-items-center opacity-50">
                            <img src="https://pcific.shop/upload/1725636069-66db1de514968.png" alt="Sun X ">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="#" class="brand d-flex align-items-center opacity-50">
                            <img src="https://pcific.shop/upload/1725635370-66db1b2a7d1cc.png" alt="Caretta Pool">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="brand d-flex align-items-center opacity-50">
                            <img src="https://pcific.shop/upload/1725635340-66db1b0c809d6.png" alt="Creature Game Store">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="brand d-flex align-items-center opacity-50">
                            <img src="https://pcific.shop/upload/1725635330-66db1b02b6281.png" alt="Webtekno">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="brand d-flex align-items-center opacity-50">
                            <img src="https://pcific.shop/upload/1725635825-66db1cf10d669.png" alt="Lumhar Design">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="brand d-flex align-items-center opacity-50">
                            <img src="https://pcific.shop/upload/1725635872-66db1d2044b18.png"
                                alt="Webisse Web Solutions">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="brand d-flex align-items-center opacity-50">
                            <img src="https://pcific.shop/upload/1725635889-66db1d3186f23.png" alt="Stige Agency">
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>

@endsection
