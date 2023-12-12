@extends('layouts.app')

@section('title')
    SISTEM OTOMASI | PERPUSTAKAAN UNIVERSITAS DINAMIKA SURABAYA
@endsection

@section('content')
          <div class="page-content page-books">
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
                                    <li class="breadcrumb-item">
                                        <a href="/">Home</a>
                                    </li>
                                    <li
                                        class="breadcrumb-item active"
                                        aria-current="page"
                                    >
                                        Koleksi buku
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
                            <h2>Koleksi buku</h2>
                            <h4>
                                Koleksi buku Kami dari Perpustakaan Universitas
                                Dinamika
                            </h4>
                        </div>
                    </div>
                </div>
            </section>
            <section class="so-image-books">
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
            <section class="search-book">
                <div class="container d-sm-flex justify-content-sm-end">
                    <nav
                        class="navbar-search-book navbar-light mb-4"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        <form
                            class="form-inline d-sm-flex justify-content-center" action="{{ route('book') }}" method="GET"
                        >
                            <input
                                class="form-control mr-sm-2"
                                type="search"
                                placeholder="Cari"
                                aria-label="Search"
                                name="search"
                            />
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Cari
                            </button>
                        </form>
                    </nav>
                </div>
            </section>
            <section class="so-book-collection">
                <div class="container">
                    <div class="row text-center">
                        <div
                            class="col-12"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <h2>Koleksi buku baru dan diperbarui</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        @php $incrementbook= 0 @endphp @forelse ($books as
                        $book)
                        <div
                            class="col-6 col-md-4 col-lg-3"
                            data-aos="fade-up"
                            data-aos-delay="{{  $incrementbook += 100 }}"
                        >
                            <a href="{{ route('detail', $book->id) }}" class="book-products d-block">
                                <div class="books-thumbnail">
                                    <div
                                        class="books-image"
                                        style="
                                        @if($book->covers->count())
                                            background-image: url('{{ Storage::url($book->covers->first()->foto_cover) }}');
                                        @else
                                            background-color: #eee;
                                        @endif
                                    "
                                    ></div>
                                </div>
                                <div class="books-text">{{ $book->judul_buku }}</div>
                                <div class="books-writer">
                                    {{ $book->pengarang_1 }}
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
@endsection