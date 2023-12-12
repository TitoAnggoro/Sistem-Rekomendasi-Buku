@extends('layouts.dashboard')

@section('title')
    ADMIN | SUBJECT
@endsection

@section('content')
          <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">Subject</h2>
                    <p class="dashboard-subtitle">Create New Subject!</p>
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
                                        action="{{ route('subject.store') }}"
                                        method="POST"
                                        enctype="multipart/form-data"
                                    >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Subject 1</label>
                                                    <input
                                                        type="text"
                                                        name="subyek_1"
                                                        class="form-control"
                                                        required
                                                    />
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label>Subject 2</label>
                                                    <input
                                                        type="text"
                                                        name="subyek_2"
                                                        class="form-control"
                                                    />
                                                </div> -->
                                                <div class="form-group">
                                                    <label>Image Subject</label>
                                                    <input
                                                        type="file"
                                                        name="foto_subyek"
                                                        class="form-control"
                                                        required
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
