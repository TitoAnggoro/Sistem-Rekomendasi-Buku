@extends('layouts.app')

@section('title')
SISTEM OTOMASI | PERPUSTAKAAN UNIVERSITAS DINAMIKA SURABAYA
@endsection

@section('content')
<div class="page-content page-home">
    <section class="store-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-in">
                    <div id="so-Carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#so-Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#so-Carousel" data-slide-to="1"></li>
                            <li data-target="#so-Carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/TA-C1.png" class="d-block w-100" alt="Carousel Image" />
                            </div>
                            <div class="carousel-item">
                                <img src="/images/TA-C1.png" class="d-block w-100" alt="Carousel Image" />
                            </div>
                            <div class="carousel-item">
                                <img src="/images/TA-C1.png" class="d-block w-100" alt="Carousel Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="so-book-trend-categories">
        <div class="container">
            <div class="row text-center">
                <div class="col-12" data-aos="fade-up">
                    <h2>Kategori</h2>
                </div>
            </div>
            <div class="row">
                @php $incrementsubject = 0 @endphp @forelse ($subjects
                as $subject)
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                    <a class="component-books-categories d-block" href="{{ route('categories-detail', $subject->id) }}">
                        <div class="categories-image">
                            <img src="{{  Storage::url($subject->foto_subyek) }}" alt="Baby Categories" class="w-100" />
                        </div>
                        <p class="categories-text">
                            {{ $subject->subyek_1 }}
                        </p>
                    </a>
                </div>
                @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    No Categories Found
                </div>
                @endforelse
            </div>
        </div>
    </section>
    <section class="so-book-new-products">

        <div class="container">
            <div class="row text-center">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <h2>Koleksi buku baru dan diperbarui</h2>
                </div>
            </div>
            <div class="row text-center">
                @php $incrementbook= 0 @endphp @forelse ($books as
                $book)
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{  $incrementbook += 100 }}">
                    <a href="{{ route('book') }}" class="book-products d-block">
                        <div class="books-thumbnail">
                            <div class="books-image" style="
                                        @if($book->covers->count())
                                            background-image: url('{{ Storage::url($book->covers->first()->foto_cover) }}');
                                        @else
                                            background-color: #eee;
                                        @endif
                                    "></div>
                        </div>
                        <div class="books-text">{{ $book->judul_buku }}</div>
                        <div class="books-writer">
                            {{ $book->pengarang_1 }}
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    No Books Found
                </div>
                @endforelse
            </div>
        </div>
        <section class="perpusundika-maps mt-5">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-12" data-aos="zoom-in">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=universitas dinamika&t=&z=15&ie=UTF8&iwloc=&output=embed"></iframe><a href="https://mcpepro.com/">MCPE</a>
                            </div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 100%;
                                    height: 400px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 100%;
                                    height: 400px;
                                }

                                .gmap_iframe {
                                    height: 400px !important;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="dentist-maps-desc mt-5">
            <div class="container text-center">
                <div class="row justify-content-center" data-aos="zoom-in">
                    <h2>
                        Mencari Referensi Buku dengan Standar Akreditasi
                        A?
                    </h2>
                    <p>
                        Perpustakaan Universitas Dinamika pertama kali
                        bertempat di Jl. Ketintang Baru XIV/2 Surabaya.
                        Setelah itu, pindah lokasi dan menempati gedung
                        di SIER, Jl. Rungkut Industri I/1 Surabaya.
                        Sekitar Maret 1999, bersamaan dengan perpindahan
                        ke kampus baru, maka perpustakaan Universitas
                        Dinamika juga ikut pindah ke kampus baru, di Jl.
                        Raya Kedung Baruk 98, gedung biru.
                    </p>
                </div>
            </div>
        </section>
    </section>
</div>
@endsection