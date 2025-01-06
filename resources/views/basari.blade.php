@extends('layouts.app')

@section('title', 'Başarılarımız')
@section('custom-css')
    <style>
        body {
            background-color: black;
            color: white;
        }

        .nav-pills .nav-link.active {
            background-color: #04839E;
        }

        .nav-pills .nav-link {
            color: white;
        }

        .nav-pills .nav-link:hover {
            color: #04839E;
        }

        .table {
            color: white;
        }

        .custom-container {
            background-color: rgba(4, 131, 158, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }
    </style>

@endsection

@section('content')
    <section class="pb-120 position-relative pt-120 section-hero-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fs-80 img-custom-anim-left lh-1 wow text-white"
                        style="visibility: visible; animation-name: img-anim-left;">BAŞARILARIMIZ</h1>
                </div>
            </div>
            <div class="img-custom-anim-left row wow">
                <!-- Sol menü -->
                <div class="col-md-3 mt-4">
                    <div class="flex-column nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach ($takimlar as $index => $takim)
                            <button class="nav-link {{ $index === 0 ? 'active' : '' }}"
                                id="v-pills-{{ Str::slug($takim->name) }}-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-{{ Str::slug($takim->name) }}" type="button" role="tab">
                                {{ $takim->name }}
                            </button>
                        @endforeach
                    </div>
                </div>

                <!-- Sağ içerik -->
                <div class="col-md-9 mt-4">
                    <div class="tab-content" id="v-pills-tabContent">
                        @foreach ($takimlar as $index => $takim)
                            <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                                id="v-pills-{{ Str::slug($takim->name) }}" role="tabpanel">
                                <div class="custom-container">
                                    <h3 class="mb-4">{{ $takim->name }} Turnuvaları</h3>
                                    <table class="table-hover table">
                                        <thead>
                                            <tr>
                                                <th>DERECE</th>
                                                <th>TURNUVA</th>
                                                <th>TARİH</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($takim->basarilar as $basari)
                                                <tr>
                                                    <td>{{ $basari->derece }}</td>
                                                    <td>{{ $basari->turnuva }}</td>
                                                    <td>{{ $basari->tarih->format('d.m.Y') }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3">Bu takım için başarı bulunmamaktadır.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
