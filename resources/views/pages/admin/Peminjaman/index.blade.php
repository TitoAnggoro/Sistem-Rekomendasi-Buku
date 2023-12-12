@extends('layouts.dashboard')

@section('title')
    Dentist Homepage
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
                    href="{{ route('peminjaman.create') }}"
                    class="btn btn-primary mb-3"
                  >
                    + Tambah Peminjaman Baru
                  </a>
                  <div class="table-responsive">
                    <table
                      class="table table-hover scroll-horizontal-vertical w-100"
                      id="crudTable"
                    >
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NIM</th>
                          <th>Nomor Induk</th>
                          <th>jenis Koleksi</th>
                          <th>Tgl Pinjam</th>
                          <th>Tgl Kembali 1</th> 
                          {{-- <th>Tgl Kembali 2</th>  --}}
                          <th>Sts Wajib</th>
                          {{-- <th>Sts Wajib KBL</th> --}}
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
          {data: 'nim', name :'nim'},
          {data: 'nomor_induk', name :'nomor_induk'},
          {data: 'jenis_koleksi', name :'jenis_koleksi'},
          {data: 'tgl_pinjam', name :'tgl_pinjam'},
          {data: 'tgl_kembali_1', name :'tgl_kembali_1'},
          // {data: 'tgl_kembali_2', name :'tgl_kembali_2'},
          {data: 'sts_wajib', name :'sts_wajib'},
          // {data: 'sts_wajib_kbl', name :'sts_wajib_kbl'},

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