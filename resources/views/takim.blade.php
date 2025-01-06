@extends('layouts.app')

@section('title', 'Valorant')

@section('custom-css')
    <style>
        .team {
            display: flex;
            justify-content: center;
            gap: 10px;
            /* Oyuncular arasında boşluk */
        }

        .player {
            position: relative;
            width: 300px;
            /* Görsel boyutuna göre ayarlayın */
            height: 530px;
            /* Görsel boyutuna göre ayarlayın */
            margin: -20px;
            transition: filter 0.3s ease, opacity 0.3s ease;
        }

        .player img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: bottom;
        }

        /* Tüm oyuncular varsayılan durumda net görünür */
        .team .player {
            opacity: 1;
            filter: grayscale(0%);
            z-index: 1;
        }

        /* Hover durumunda diğer oyuncular gri ve %50 opak olur */
        .team:hover .player {
            opacity: 0.5;
            filter: grayscale(100%);
            z-index: 0;
        }

        /* Hover edilen oyuncu parlak ve net kalır */
        .team .player:hover {
            opacity: 1;
            filter: grayscale(0%);
            z-index: 99;
            scale: 1.08;
        }

        /* Başlık ve metin için stil */
        .info {
            position: absolute;
            bottom: -50px;
            /* Görselin hemen altına yerleştir */
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            opacity: 0;
            /* Varsayılan olarak görünmez */
            transition: opacity 0.3s ease-in-out;
            color: white;
            /* Metin rengi */
            background-color: rgba(0, 0, 0, 0.7);
            /* Şeffaf arka plan */
            padding: 10px;
            border-radius: 8px;
            font-size: 14px;
            width: 100%;
        }

        /* Hover edilen oyuncunun bilgisi görünsün */
        .player:hover .info {
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <section class="position-relative section-hero-4" style="margin:40px">
        <div class="container">
            <div class="row" style="margin-bottom:40px">
                <div class="text-center">
                    <img src="{{ asset('valorant/logo.png') }}" style="width:150px; margin-bottom:30px">
                    <h3>BBL PCIFIC</h3>
                </div>
            </div>
            <div class="row flex-nowrap">
                <div class="team">
                    <div class="player">
                        <img src="{{ asset('valorant/p-1.png') }}" alt="Player 1" class="dark">
                        <div class="info">
                            <h4>Loita</h4>
                            <p>Utku Kart</p>
                        </div>
                    </div>
                    <div class="player">
                        <img src="{{ asset('valorant/p-2.png') }}" alt="Player 2" class="dark">
                        <div class="info">
                            <h4>Crewen</h4>
                            <p>Ali Eren Sargın</p>
                        </div>
                    </div>

                    <div class="player">
                        <img src="{{ asset('valorant/p-3.png') }}" alt="Player 2" class="dark">
                        <div class="info">
                            <h4>Rosé</h4>
                            <p>Eren Erzan</p>
                        </div>
                    </div>

                    <div class="player">
                        <img src="{{ asset('valorant/p-4.png') }}" alt="Player 2" class="dark">
                        <div class="info">
                            <h4>ComeBack</h4>
                            <p>Berkcan Şentürk</p>
                        </div>
                    </div>

                    <div class="player">
                        <img src="{{ asset('valorant/p-5.png') }}" alt="Player 2" class="dark">
                        <div class="info">
                            <h4>Lar0k</h4>
                            <p>Yusuf Kaan Kamber</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
@endsection
