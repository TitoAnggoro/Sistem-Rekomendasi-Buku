@extends('layouts.dashboard')

@section('title')
    ADMIN | COVERS
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">Covers</h2>
          <p class="dashboard-subtitle">Create New Covers!</p>
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
                    action="{{ route('covers.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                  >
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Judul Buku</label>
                      <select name="books_id" class="form-control">
                        @foreach ($books as $book)
                          <option value="{{ $book->id }}">{{ $book->judul_buku }}</option>
                        @endforeach
                      </select>
                        </div>
                        <div class="form-group">
                          <label>Image Covers</label>
                          <input
                            type="file"
                            name="foto_cover"
                            class="form-control"
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col text-right">
                        <button type="submit" class="btn btn-success px-5">
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
