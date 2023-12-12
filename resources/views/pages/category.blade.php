@extends('layouts.app')

@section('title')
    SISTEM OTOMASI | PERPUSTAKAAN UNIVERSITAS DINAMIKA SURABAYA
@endsection

@section('content')
        <div class="page-content page-categories">
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
                                        Kategori Buku
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
                            <h2>Kategori Buku</h2>
                            <h4>
                                Kategori Buku Kami dari Perpustakaan Universitas
                                Dinamika
                            </h4>
                        </div>
                    </div>
                </div>
            </section>
            <section class="so-image-categories">
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
            <section class="so-categories">
                <div class="container">
                    <div class="row">
                        @php $incrementsubject = 0 @endphp @forelse ($subjects
                        as $subject)
                        <div
                            class="col-6 col-md-3 col-lg-2"
                            data-aos="fade-up"
                            data-aos-delay="600"
                        >
                            <a
                                class="component-books-categories d-block"
                                href="{{ route('categories-detail', $subject->id) }}"
                            >
                                <div class="categories-image">
                                    <img
                                        src="{{  Storage::url($subject->foto_subyek) }}"
                                        alt="Baby Categories"
                                        class="w-100"
                                    />
                                </div>
                                <p class="categories-text">
                                    {{ $subject->subyek_1 }}
                                </p>
                            </a>
                        </div>
                        @empty
                        <div
                            class="col-12 text-center py-5"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            No Categories Found
                        </div>
                        @endforelse
                    </div>
                    <hr />
                </div>
            </section>
            <section class="books-category">
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
                            <a class="book-products d-block" href="{{ route('detail', $book->id) }}">
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
                    <div class="row">
                        <div class="col-12 mt-4">{{ $books->links() }}</div>
                    </div>
                </div>
            </section>
        </div>
@endsection