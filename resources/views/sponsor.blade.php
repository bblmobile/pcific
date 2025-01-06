@extends('layouts.app')

@section('title', 'Sponsorlarımız')

@section('custom-css')
    <style>
        .sponsor-item {
            flex: 0 0 auto;
            width: 200px;
            margin-right: 20px;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .sponsor-item:hover {
            transform: scale(1.1);
        }

        .sponsor-item img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .sponsor-item:hover .sponsor-overlay {
            opacity: 1;
        }

        .sponsor-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            opacity: 0;
            transition: opacity 0.3s ease;
            text-align: center;
            border-radius: 10px;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sponsor-name {
            font-weight: bold;
            padding: 0 10px;
        }

        .swiper {
            width: 100%;
            padding: 20px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #04839E;
            background: rgba(255, 255, 255, 0.9);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            --swiper-navigation-size: 20px;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 20px;
        }

        .swiper-pagination-bullet {
            background: #04839E;
        }
    </style>
@endsection

@section('content')
    <section class="pb-120 position-relative pt-120 section-hero-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fs-80 img-custom-anim-left lh-1 wow text-white"
                        style="visibility: visible; animation-name: img-anim-left;">SPONSORLARIMIZ</h1>
                </div>
            </div>
            <div class="img-custom-anim-left row wow">
                <div class="col-md-12">
                    <div class="sponsor-swiper swiper">
                        <div class="swiper-wrapper">
                            <!-- Blade syntax ile döngü -->
                            @foreach ($sponsors as $sponsor)
                                <div class="swiper-slide">
                                    <div class="sponsor-item">
                                        <a href="{{ $sponsor->url ?? '#' }}" target="_blank">
                                            <img src="{{ asset('storage/' . $sponsor->image) }}" alt="{{ $sponsor->name }}"
                                                class="img-fluid">
                                            <div class="sponsor-overlay">
                                                <span class="sponsor-name">{{ $sponsor->name }}</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom-js')
    <script>
        const swiper = new Swiper('.sponsor-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                }
            }
        });
    </script>
@endsection
