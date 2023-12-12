@extends('layouts.app')

@section('title')
    SISTEM OTOMASI | PERPUSTAKAAN UNIVERSITAS DINAMIKA SURABAYA
@endsection

@section('content')
   <div class="page-content page-about-us">
      <section
        class="so-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Tentang Kami
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="so-greeting">
        <div class="container text-center">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h2>Tentang Kami</h2>
              <h4>Kami dari Perpustakaan Universitas Dinamika</h4>
            </div>
          </div>
        </div>
      </section>
      <section class="so-image-about-us">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <img
                src="/images/TA-C1.png"
                class="d-block w-100 rounded"
                alt="Carousel Image"
              />
              <hr />
            </div>
          </div>
        </div>
      </section>
      <section class="so-desc-about-us">
        <div class="container">
          <div class="row text-center">
            <div class="col-12" data-aos="fade-down">
              <p>
                Perpustakaan Universitas Dinamika pertama kali bertempat di Jl.
                Ketintang Baru XIV/2 Surabaya. Setelah itu, pindah lokasi dan
                menempati gedung di SIER, Jl. Rungkut Industri I/1 Surabaya.
                Sekitar Maret 1999, bersamaan dengan perpindahan ke kampus baru,
                maka perpustakaan Universitas Dinamika juga ikut pindah ke
                kampus baru, di Jl. Raya Kedung Baruk 98, gedung biru.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection