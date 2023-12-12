@extends('layouts.dashboard') @section('title') Dentist Homepage @endsection
@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Peminjaman</h2>
            <p class="dashboard-subtitle">Create New Peminjaman!</p>
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
                                action="{{ route('peminjaman.store') }}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <input
                                                type="text"
                                                name="nim"
                                                class="form-control"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        {{--
                                        <div class="form-group">
                                            <label>Nomor Induk</label>
                                            <input
                                                type="text"
                                                name="nomor_induk"
                                                class="form-control"
                                                required
                                            />
                                        </div>
                                        --}}
                                        <label>Judul Buku</label>
                                        <select
                                            name="nomor_induk"
                                            class="form-control"
                                        >
                                            @foreach ($books as $book)
                                            <option value="{{ $book->id }}">
                                                {{ $book->judul_buku }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Jenis Koleksi</label>
                                            <input
                                                type="text"
                                                name="jenis_koleksi"
                                                class="form-control"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input
                                                type="date"
                                                name="tgl_pinjam"
                                                class="form-control"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Tanggal Kembali 1</label>
                                            <input
                                                type="date"
                                                name="tgl_kembali_1"
                                                class="form-control"
                                            />
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Tanggal Kembali 2</label>
                                            <input
                                                type="date"
                                                name="tgl_kembali_2"
                                                class="form-control"
                                            />
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Status Wajib</label>
                                            <input
                                                type="text"
                                                name="sts_wajib"
                                                class="form-control"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Statys Wajib kbl</label>
                                            <input
                                                type="text"
                                                name="sts_wajib_kbl"
                                                class="form-control"
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
