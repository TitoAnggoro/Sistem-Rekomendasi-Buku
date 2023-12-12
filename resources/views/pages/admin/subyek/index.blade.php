@extends('layouts.dashboard')

@section('title')
    ADMIN | SUBJECT
@endsection

@section('content')

<div class="section-content section-dashboard-home" data-aos="fade-up">
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">Dashboard</h2>
          <p class="dashboard-subtitle">Look what you have made today!</p>
        </div>
        <div class="dashboard-content">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <a
                    href="{{ route('subject.create') }}"
                    class="btn btn-primary mb-3"
                  >
                    + Tambah Subject Baru
                  </a>
                  <div class="table-responsive">
                    <table
                      class="table table-hover scroll-horizontal-vertical w-100"
                      id="crudTable"
                    >
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Subyek 1</th>
                          {{-- <th>Subyek 2</th> --}}
                          <th>Gambar</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
@endsection

@push('addon-script')
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
          {data: 'id', name :'id'},
          {data: 'subyek_1', name :'subyek_1'},
          // {data: 'subyek_2', name :'subyek_2'},
          {data: 'foto_subyek', name :'foto_subyek'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
    </script>
@endpush