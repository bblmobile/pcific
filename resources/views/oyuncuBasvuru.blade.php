@extends('layouts.app')
@section('title', 'Oyuncu Başvuru')

@section('custom-css')
    <style>
        .card {
            background-color: #1e1e1e;
            /* Koyu gri kart arka planı */
            border: 1px solid #333333;
            /* Kenarlık */
            border-radius: 8px;
            /* Yuvarlatılmış köşeler */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            /* Hafif gölge */
        }

        .card-header {
            background-color: #2a2a2a;
            /* Daha koyu başlık arka planı */
            color: #ffffff;
            /* Beyaz başlık yazısı */
            font-size: 1.25rem;
            font-weight: bold;
            border-bottom: 1px solid #333333;
        }

        .form-control,
        .form-select {
            background-color: #2a2a2a;
            /* Form elemanlarının arka planı */
            color: #ffffff;
            /* Beyaz yazı */
            border: 1px solid #444444;
            /* Kenarlık */
            border-radius: 6px;
            /* Yuvarlatılmış köşeler */
            padding: 10px;
        }

        .form-control:focus,
        .form-select:focus {
            background-color: #333333;
            /* Odaklanıldığında daha koyu arka plan */
            border-color: #007bff;
            /* Mavi kenarlık */
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            /* Hafif mavi gölge */
        }

        .form-label {
            color: #cccccc;
            /* Daha açık gri yazı */
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            /* Mavi buton */
            border-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Daha koyu mavi hover */
            border-color: #0056b3;
        }

        .invalid-feedback {
            color: #ff6b6b;
            /* Hata mesajları için kırmızı */
        }

        .form-control.is-invalid,
        .form-select.is-invalid {
            border-color: #ff6b6b;
            /* Hata durumunda kırmızı kenarlık */
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
                @if (session('success'))
                    <div class="alert alert-dismissible alert-success fade show mt-3 mb-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                <div class="col-md-12">
                    <form action="{{ route('oyuncu-basvuru.create') }}" method="POST" id="applicationForm">
                        @csrf
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="card">
                                        <div class="card-header">
                                            Oyuncu Başvuru Formu
                                        </div>
                                        <div class="card-body">
                                            <!-- Temel Bilgiler -->
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="first_name" class="form-label">Adınız</label>
                                                    <input type="text"
                                                        class="form-control @error('first_name') is-invalid @enderror"
                                                        id="first_name" name="first_name" required>
                                                    @error('first_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="last_name" class="form-label">Soyadınız</label>
                                                    <input type="text"
                                                        class="form-control @error('last_name') is-invalid @enderror"
                                                        id="last_name" name="last_name" required>
                                                    @error('last_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="birth_date" class="form-label">Doğum Tarihi</label>
                                                    <input type="date"
                                                        class="form-control @error('birth_date') is-invalid @enderror"
                                                        id="birth_date" name="birth_date" max="2018-01-01" required>
                                                    @error('birth_date')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="email" class="form-label">E-posta</label>
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="email" name="email" required>
                                                    @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="phone" class="form-label">Telefon</label>
                                                    <input type="tel"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        id="phone" name="phone" required>
                                                    @error('phone')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Veli Bilgileri -->
                                            <div id="parentInfo" style="display: none;">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="parent_full_name" class="form-label">Veli Adı
                                                            Soyadı</label>
                                                        <input type="text"
                                                            class="form-control @error('parent_full_name') is-invalid @enderror"
                                                            id="parent_full_name" name="parent_full_name">
                                                        @error('parent_full_name')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="parent_phone" class="form-label">Veli Telefon
                                                            Numarası</label>
                                                        <input type="tel"
                                                            class="form-control @error('parent_phone') is-invalid @enderror"
                                                            id="parent_phone" name="parent_phone">
                                                        @error('parent_phone')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="selected_game" class="form-label">Oyun Seçiniz</label>
                                                    <select class="form-select @error('selected_game') is-invalid @enderror"
                                                        id="selected_game" name="selected_game" required>
                                                        <option value="">Seçiniz</option>
                                                        <option value="Valorant">Valorant</option>
                                                        <option value="CS">CS</option>
                                                        <option value="FC">FC</option>
                                                        <option value="LOL">LOL</option>
                                                        <option value="DOTA 2">DOTA 2</option>
                                                        <option value="PB">PB</option>
                                                        <option value="R6">R6</option>
                                                    </select>
                                                    @error('selected_game')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary">Başvuru Yap</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom-js')
    <script>
        document.getElementById('birth_date').addEventListener('change', function() {
            const birthDate = new Date(this.value); // Kullanıcının girdiği doğum tarihi
            const today = new Date(); // Bugünün tarihi
            let age = today.getFullYear() - birthDate.getFullYear(); // 'let' ile tanımlandı
            const monthDiff = today.getMonth() - birthDate.getMonth();

            // Ay ve gün farkını kontrol ederek yaş hesaplamasını düzelt
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--; // 'age' yeniden atanabilir
            }

            const parentInfo = document.getElementById('parentInfo'); // Veli bilgileri bölümü
            const parentInputs = parentInfo.querySelectorAll('input'); // Veli bilgisi inputları

            if (age < 18) {
                // 18 yaşından küçükse veli bilgilerini göster ve zorunlu yap
                parentInfo.style.display = 'block';
                parentInputs.forEach(input => {
                    input.required = true;
                });
            } else {
                // 18 yaşından büyükse veli bilgilerini gizle ve zorunluluğu kaldır
                parentInfo.style.display = 'none';
                parentInputs.forEach(input => {
                    input.required = false;
                    input.value = ''; // Veli bilgilerini temizle
                });
            }
        });
    </script>
@endsection
