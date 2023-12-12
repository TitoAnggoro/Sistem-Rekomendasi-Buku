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
                    href="{{ route('books.create') }}"
                    class="btn btn-primary mb-3"
                  >
                    + Tambah Books Baru
                  </a>
                  <div class="table-responsive">
                    <table
                      class="table table-hover scroll-horizontal-vertical w-100"
                      id="crudTable"
                    >
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NOMOR INDUK</th>
                          <th>JUDUL BUKU</th>
                          <th>PENGARANG 1</th>
                          <th>PENGARANG 2</th>
                          <th>PENGARANG 3</th>
                          <th>SINOPSIS</th>
                          <th>SUBYEK_1</th>
                          {{-- <th>SUBYEK_2</th> --}}
                          <th>BAHASA</th>
                          <th>ISBN</th>
                          <th>JUMLAH</th>
                          <th>PENERBIT</th>
                          <th>JENIS KOLEKSI</th>
                          <th>STATUS</th>
                          <th>KET STATUS KOLEKSI</th>
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
  var datatable = $("#crudTable").DataTable({
    processing: true,
    serverSide: true,
    ordering: true,
    ajax: {
      url: "{!! url()->current() !!}",
    },
    columns: [
      { data: "id", name: "id" },
      { data: "nomor_induk", name: "nomor_induk" },
      { data: "judul_buku", name: "judul_buku" },
      { data: "pengarang_1", name: "pengarang_1" },
      { data: "pengarang_2", name: "pengarang_2" },
      { data: "pengarang_3", name: "pengarang_3" },
      { data: "sinopsis", name: "sinopsis" },
      { data: 'subject.subyek_1', name: 'subject.subyek_1' },
      // { data: 'subjects.subyek_2', name: 'subjects.subyek_2' },
      { data: "bahasa", name: "bahasa" },
      { data: "isbn", name: "isbn" },
      { data: "jumlah", name: "jumlah" },
      { data: "penerbit", name: "penerbit" },
      { data: "jenis_koleksi", name: "jenis_koleksi" },
      { data: "status", name: "status" },
      { data: "status_koleksi", name: "status_koleksi" },
      {
        data: "action",
        name: "action",
        orderable: false,
        searchable: false,
        width: "15%",
      },
    ],
  });
</script>
@endpush