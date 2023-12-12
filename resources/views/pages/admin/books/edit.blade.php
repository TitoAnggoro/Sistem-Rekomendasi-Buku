@extends('layouts.dashboard')

@section('title')
    Dentist Homepage
@endsection

@section('content')
        <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">Books</h2>
                    <p class="dashboard-subtitle">Edit New Books!</p>
                </div>
                <div class="dashboard-content">
                    <div class="row">
                        <div class="col-md-12">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <form
                                        action="{{ route('books.update', $item->id) }}"
                                        method="POST"
                                        enctype="multipart/form-data"
                                    >
                                    @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>NOMOR INDUK</label>
                                                    <input
                                                        type="text"
                                                        name="nomor_induk"
                                                        class="form-control"
                                                        required
                                                        value="{{ $item->nomor_induk }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>JUDUL BUKU</label>
                                                    <input
                                                        type="text"
                                                        name="judul_buku"
                                                        class="form-control"
                                                        required
                                                        value="{{ $item->judul_buku }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>PENGARANG 1</label>
                                                    <input
                                                        type="text"
                                                        name="pengarang_1"
                                                        class="form-control"
                                                        required
                                                        value="{{ $item->pengarang_1 }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>PENGARANG 2</label>
                                                    <input
                                                        type="text"
                                                        name="pengarang_2"
                                                        class="form-control"
                                                        value="{{ $item->pengarang_2}}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>PENGARANG 3</label>
                                                    <input
                                                        type="text"
                                                        name="pengarang_3"
                                                        class="form-control"
                                                        value="{{ $item->pengarang_3 }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>SINOPSIS</label>
                                                    <textarea
                                                        name="sinopsis"
                                                        class="form-control"
                                                        id="editor"
                                                        required   
                                                    >
                                                    {!! $item->sinopsis !!}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>SUBYEK 1</label>
                                                    <select
                                                        name="subjects_id"
                                                        class="form-control"
                                                    >
                                                    <option value="{{ $item->subjects_id }}">{{ $item->subject->subyek_1 }}</option>
                                                        <option
                                                            value=""
                                                            disabled
                                                        >
                                                            ----------------
                                                        </option>

                                                        @foreach ($subjects as
                                                        $subjects)
                                                        <option
                                                            value="{{ $subjects->id }}"
                                                        >
                                                            {{
                                                            $subjects->subyek_1
                                                            }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>SUBYEK 2</label>
                                                    <select
                                                        name="subjects_id"
                                                        class="form-control"
                                                    >
                                                        @foreach ($subjects as
                                                        $subject)
                                                        <option
                                                            value="{{ $subject->id }}"
                                                        >
                                                            {{
                                                            $subject->subyek_2
                                                            }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            --}}
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>BAHASA</label>
                                                    <input
                                                        type="text"
                                                        name="bahasa"
                                                        class="form-control"
                                                        value="{{ $item->bahasa }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>ISBN</label>
                                                    <input
                                                        type="text"
                                                        name="isbn"
                                                        class="form-control"
                                                        value="{{ $item->isbn }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>JUMLAH</label>
                                                    <input
                                                        type="text"
                                                        name="jumlah"
                                                        class="form-control"
                            
                                                        value="{{ $item->jumlah }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>PENERBIT</label>
                                                    <input
                                                        type="text"
                                                        name="penerbit"
                                                        class="form-control"
                                                        value="{{ $item->penerbit }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>JENIS KOLEKSI</label>
                                                    <input
                                                        type="text"
                                                        name="jenis_koleksi"
                                                        class="form-control"
                                                        value="{{ $item->jenis_koleksi }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>STATUS</label>
                                                    <input
                                                        type="text"
                                                        name="status"
                                                        class="form-control"
                                                        value="{{ $item->status }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label
                                                        >KET STATUS
                                                        KOLEKSI</label
                                                    >
                                                    <input
                                                        type="text"
                                                        name="status_koleksi"
                                                        class="form-control"
                                                        value="{{ $item->status_koleksi }}"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-right">
                                                <button
                                                    type="submit"
                                                    class="btn btn-success px-5"
                                                >
                                                    Save Now
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
@endpush