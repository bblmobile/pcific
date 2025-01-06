@extends('layouts.app')

@section('title', 'İletişim')

@section('content')
    <section class="bg-black-2 section-contact-1 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="align-items-center d-flex mb-2">
                        <span class="line-gradient"></span>
                        <span class="fs-7 fw-bold text-primary text-uppercase ms-3">Bize bir mesaj bırakın.</span>
                    </div>
                    <h1 class="img-custom-anim-left wow mb-0" style="visibility: visible; animation-name: img-anim-left;">
                        İletişime Geç</h1>
                </div>
                <div class="col-lg-7 pt-lg-0 pt-8">
                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('iletisim.store') }}" method="POST">
                        @csrf
                        <div class="g-3 row">

                            <div class="col-md-6 mb-3">
                                <label for="first_name" class="form-label">Adınız</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name" class="form-label">Soyadınız</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="email" class="form-label">E-posta</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="phone" class="form-label">Telefon</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="message" class="form-label">Mesajınız</label>
                                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mt-3">
                                    Gönder
                                    <i class="ri-arrow-right-up-line"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
