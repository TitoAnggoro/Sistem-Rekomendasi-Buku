@extends('layouts.app')

@section('title')
    SISTEM OTOMASI | PERPUSTAKAAN UNIVERSITAS DINAMIKA SURABAYA
@endsection

@section('content')
    <div class="page-content page-contact">
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
                    Contact
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-greeting">
        <div class="container text-center">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h2>Contact</h2>
              <h4>Kami dari Perpustakaan Universitas Dinamika</h4>
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-image-contact">
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
      <section class="dentist-contact-us" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center">
              <h3>Anda dapat Menghubungi kami Via Whatsapp dan Instagram.</h3>
              <div class="mt-lg-5">
                <h5>Perpustakaan Universitas Dinamika</h5>
                <p>
                  Jl. Raya Kedung Baruk No.98, Kedung Baruk, Kec. Rungkut, Kota
                  SBY, Jawa Timur 60298
                </p>
                <p>Working Hours : Monday to Friday (08:00 - 17:00)</p>
                <p>(+62 812308242)</p>

                <div class="icon-social-media mb-5 mt-4">
                  <h5>Social Media</h5>
                  <a href="">
                    <img
                      src="images/icon-instagram.png"
                      class="img-fluid w-25"
                      alt=""
                    />
                  </a>
                  <a href="">
                    <img
                      src="images/icon-whatsapp.png"
                      class="img-fluid w-25"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="text-center">
                <h3 class="mb-3">Hubungi Kami</h3>
                <p>
                  Anda dapat mengisi formulir di bawah ini untuk mengirimkan
                  pesan kepada kami.
                </p>
              </div>
              <div class="form-group">
                <label for="namaLengkap">Nama Lengkap</label>
                <input
                  type="text"
                  class="form-control text-center"
                  id="namaLengkap"
                  aria-describedby="emailHelp"
                  name="namaLengkap"
                />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control text-center"
                  id="email"
                  aria-describedby="emailHelp"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="notelp">No Telp</label>
                <input
                  type="text"
                  class="form-control text-center"
                  id="notelp"
                  aria-describedby="emailHelp"
                  name="notelp"
                />
              </div>
              <div class="form-group">
                <label for="message">Pesan dan Saran anda *</label>
                <input
                  type="text"
                  class="form-control text-center"
                  id="message"
                  aria-describedby="emailHelp"
                  name="message"
                />
              </div>
              <div class="">
                <a
                  href="/success.html"
                  class="btn btn-success mt-4 px-4 btn-block"
                >
                  Kirim
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="perpusundika-maps mt-5">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-12" data-aos="zoom-in">
              <div class="mapouter">
                <div class="gmap_canvas">
                  <iframe
                    class="gmap_iframe"
                    width="100%"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.com/maps?q=universitas dinamika&t=&z=15&ie=UTF8&iwloc=&output=embed"
                  ></iframe
                  ><a href="https://mcpepro.com/">MCPE</a>
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
            <h2>Mencari Referensi Buku dengan Standar Akreditasi A?</h2>
            <p class="text-center">
              Perpustakaan Universitas Dinamika pertama kali bertempat di Jl.
              Ketintang Baru XIV/2 Surabaya. Setelah itu, pindah lokasi dan
              menempati gedung di SIER, Jl. Rungkut Industri I/1 Surabaya.
              Sekitar Maret 1999, bersamaan dengan perpindahan ke kampus baru,
              maka perpustakaan Universitas Dinamika juga ikut pindah ke kampus
              baru, di Jl. Raya Kedung Baruk 98, gedung biru.
            </p>
          </div>
        </div>
      </section>
    </div>
@endsection