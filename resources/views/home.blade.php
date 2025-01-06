@extends('layouts.app')

@section('title', 'Ana Sayfa')

@section('content')
    <!-- prettier-ignore -->
		<!-- Hero-2 -->
    <section class="position-relative pt-160 section-hero-2 overflow-hidden">
        <div class="pb-160 position-relative pt-lg-150 scroll-move-right">
            <div
                class="align-items-center d-flex img-custom-anim-top position-absolute start-50 top-50 translate-middle wow gap-5">
                <h3 class="fs-300 stroke">PCIFIC ESPORTS</h3>
            </div>
        </div>
        <div class="animation-style3 pt-120 tg-heading-subheading container">
            <div class="align-items-center d-flex section-news-2 mb-3">
                <span class="fs-7 fw-bold text-primary text-uppercase text-nowrap">pcific esports</span>
                <span class="line ms-4"></span>
            </div>
            <h2 class="Company updates pb-80 text-end">Takımlarımız</h2>
        </div>

        <div
            class="align-items-center align-items-lg-end container-fluid d-flex flex-column flex-lg-row justify-content-center pb-160 gap-5">


            <div class="card-hero-2 position-relative px-md-0 zoom-img px-2">
                <div class="rounded-3 overflow-hidden">
                    <img class="img-custom-anim-left w-100 wow" src="{{ asset('gorseller/takim_3.jpg') }}"
                        alt="Pcific - CS 2 Takımı">
                </div>
                <div class="background-brand position-absolute w-100 start-0 bottom-0 z-0"></div>
                <div class="brand position-absolute w-100 start-0 bottom-0 p-5 opacity-0">
                    <p class="d-md-block d-none mt-1 mb-2 mb-4">
                        COUNTER STRIKE 2
                    </p>
                    <a href="/takimlar/cs2" class="btn btn-outline-primary"> İncele </a>
                </div>
            </div>

            <div class="card-hero-2 position-relative px-md-0 zoom-img px-2">
                <div class="rounded-3 overflow-hidden">
                    <img class="img-custom-anim-left w-100 wow" src="{{ asset('gorseller/takim_2.jpg') }}"
                        alt="BBL Pcific - Valorant Takımı">
                </div>
                <div class="background-brand position-absolute w-100 start-0 bottom-0 z-0"></div>
                <div class="brand position-absolute w-100 start-0 bottom-0 p-5 opacity-0">
                    <p class="d-md-block d-none mt-1 mb-2 mb-4">
                        VALORANT
                    </p>
                    <a href="/takimlar/cs2" class="btn btn-outline-primary"> İncele </a>
                </div>
            </div>

            <div class="card-hero-2 position-relative px-md-0 zoom-img px-2">
                <div class="rounded-3 overflow-hidden">
                    <img class="img-custom-anim-left w-100 wow" src="{{ asset('gorseller/takim_1.jpg') }}"
                        alt="Pcific - FC 25 Takımı">
                </div>
                <div class="background-brand position-absolute w-100 start-0 bottom-0 z-0"></div>
                <div class="brand position-absolute w-100 start-0 bottom-0 p-5 opacity-0">
                    <p class="d-md-block d-none mt-1 mb-2 mb-4">
                        FC 25
                    </p>
                    <a href="/takimlar/cs2" class="btn btn-outline-primary"> İncele </a>
                </div>
            </div>

        </div>
    </section>

    <!--About 2-->
    <section class="bg-black-2 pb-250 pt-120 section-about-2 overflow-hidden">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-lg-10 position-relative">
                    <h1 class="d-lg-block d-none fs-150 large-letter position-absolute">Hakkımızda</h1>
                    <span class="fs-7 fw-bold text-primary text-uppercase">since from 2018</span>
                    <div class="animation-style3 tg-heading-subheading">
                        <h2 class="position-relative tg-element-title">
                            Biz Kimiz?
                        </h2>
                    </div>
                    <p class="mt-4">Espor izleyerek büyüyen insanların, bu alanda emek vermek isteyen gençlere destek
                        olmak, alan tanımak ve yerel kültürle bütünleşik, herkesin ait hissedebildiği bir kulüp kurma fikri
                        ile yola çıkan PCIFIC Esports, 2018 yılında kuruldu.</p>


                    <div class="border-bottom my-6 border-white opacity-25"></div>
                    <div class="d-flex">
                        <a href="contact.html" class="btn btn-outline-primary">Hakkımızda</a>
                        <a href="telto:123456789" class="btn ms-lg-3 text-white">Başarılarımız</a>
                    </div>

                    <div class="justify-content-start row mt-5">
                        <div
                            class="border-opacity-25 border-primary icon-shape icon_160 position-relative rounded-circle border shadow">
                            <img class="position-relative"
                                src="{{ asset('imgs/testimonials/testimonials-2/badge-icon.svg') }}"
                                alt="muzilla">
                            <div class="position-absolute start-50 translate-middle w-100 top-10">
                                <h6 class="circle-text rotateme">PCIFIC - ESPORTS - TEAM</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="d-inline-flex position-relative">
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
                        <a href="#" class="align-items-center brand d-flex opacity-50">
                            <img src="https://pcific.shop/upload/1725636132-66db1e24acbba.png" alt="RM Istanbul">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="#" class="align-items-center brand d-flex opacity-50">
                            <img src="https://pcific.shop/upload/1725635361-66db1b21a5252.png" alt="Kabasakal Online">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="align-items-center brand d-flex opacity-50">
                            <img src="https://pcific.shop/upload/1725635448-66db1b78e738a.png" alt="X Prime">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="align-items-center brand d-flex opacity-50">
                            <img src="https://pcific.shop/upload/1725636069-66db1de514968.png" alt="Sun X ">
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="#" class="align-items-center brand d-flex opacity-50">
                            <img src="https://pcific.shop/upload/1725635370-66db1b2a7d1cc.png" alt="Caretta Pool">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="align-items-center brand d-flex opacity-50">
                            <img src="https://pcific.shop/upload/1725635340-66db1b0c809d6.png" alt="Creature Game Store">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="align-items-center brand d-flex opacity-50">
                            <img src="https://pcific.shop/upload/1725635330-66db1b02b6281.png" alt="Webtekno">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="align-items-center brand d-flex opacity-50">
                            <img src="https://pcific.shop/upload/1725635825-66db1cf10d669.png" alt="Lumhar Design">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="align-items-center brand d-flex opacity-50">
                            <img src="https://pcific.shop/upload/1725635872-66db1d2044b18.png"
                                alt="Webisse Web Solutions">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="align-items-center brand d-flex opacity-50">
                            <img src="https://pcific.shop/upload/1725635889-66db1d3186f23.png" alt="Stige Agency">
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>

@endsection
