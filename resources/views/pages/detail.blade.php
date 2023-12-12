@extends('layouts.app') @section('title') SISTEM OTOMASI | PERPUSTAKAAN
UNIVERSITAS DINAMIKA SURABAYA @endsection @section('content')
<div class="page-content page-details">
    <section class="so-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                Book Detail
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="store-gallery" id="covers">
        <div class="container">
            <div class="row">
                <div class="col-lg-10" data-aos="zoom-in">
                    <transition name="slide-fade" mode="out-in">
                        <img
                            :key="foto_cover[activePhoto].id"
                            :src="foto_cover[activePhoto].url"
                            class="w-100 main-image"
                            alt=""
                        />
                    </transition>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div
                            class="col-3 col-lg-12 mt-2 mt-lg-0"
                            v-for="(photo, index) in foto_cover"
                            :key="photo.id"
                            data-aos="zoom-in"
                            data-aos-delay="100"
                        >
                            <a href="#" @click="changeActive(index)">
                                <img
                                    :src="photo.url"
                                    class="w-100 thumbnail-image"
                                    :class="{ active: index == activePhoto }"
                                    alt=""
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="store-details-container" data-aos="fade-up">
        <section class="so-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>{{ $book->judul_buku }}</h1>
                        <div class="book-writer">
                            {{ $book->pengarang_1 }} {{ $book->pengarang_2 }} {{
                            $book->pengarang_3 }}
                        </div>
                        <div class="book-genre">
                            {{ $book->subject->subyek_1 }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="so-description">
            <div class="container">
                <div class="row">
                    <div class="col-12">{!! $book->sinopsis !!}</div>
                </div>
            </div>
        </section>
        <section class="so-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                 <br>
                        <div class="book-stock">
                           Stok Aktif : {{ $book->jumlah }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="books-recomendation">
        <div class="container">
            <div data-aos="fade-up">
                <h2>Rekomendasi buku yang terkait</h2>
            </div>
            <div class="row text-center">
                @php $incrementbook= 0 @endphp @forelse ($books as $thisbook)
                <div
                    class="col-6 col-md-4 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="{{  $incrementbook += 100 }}"
                >
                    <a
                        href="{{ route('detail', $thisbook->id) }}"
                        class="book-products d-block"
                    >
                        <div class="books-thumbnail">
                            <div
                                class="books-image"
                                style="
                                        @if($thisbook->covers->count())
                                            background-image: url('{{ Storage::url($thisbook->covers->first()->foto_cover) }}');
                                        @else
                                            background-color: #eee;
                                        @endif
                                    "
                            ></div>
                        </div>
                        <div class="books-text">
                            {{ $thisbook->judul_buku }}
                        </div>
                        <div class="books-writer">
                            {{ $thisbook->pengarang_1 }}
                        </div>
                    </a>
                </div>
                @empty
                <div
                    class="col-12 text-center py-5"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    No Books Found
                </div>
                @endforelse
            </div>
        </div>
    </section>
</div>
@endsection @push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
    var covers = new Vue({
      el: "#covers",
      mounted() {
        AOS.init();
      },
      data: {
        activePhoto: 0,
        foto_cover: [
            @foreach ($book->covers as $covers)
          {
            id: {{ $covers->id }},
            url: "{{ Storage::url($covers->foto_cover) }}",
          },
          @endforeach
        ],
      },
      methods: {
        changeActive(id) {
          this.activePhoto = id;
        },
      },
    });
</script>
@endpush
