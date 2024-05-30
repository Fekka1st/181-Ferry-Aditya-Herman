@extends('layouting.master')
@section('title',"Manajemen Produk")

@section('content')
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="container">
                <h1>Daftar Obat</h1>
                <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">Tambah
                    Daftar Obat</button>
                <table id="kategoriObatTable" class="table table-striped dataTable-table">
                    <thead>
                        <tr>
                            <th width=10px>No</th>
                            <th>Nama Obat</th>
                            <th>Kategori Obat</th>
                            <th>Stok Obat</th>
                            <th>Harga Obat</th>
                            <th width=250px>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($kategoriObats as $index => $kategoriObat)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $kategoriObat->nama_kategori }}</td>
                            <td>
                                <button class="btn btn-warning btn-edit" data-id="{{ $kategoriObat->id }}">Edit</button>

                                @method('DELETE')
                                <a href="{{ route('kategori-obats.destroy', $kategoriObat->id) }}"
                                    class="btn btn-danger" data-confirm-delete="true">Delete</a>
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

{{-- Modal --}}
@endsection

@push('scripts')
<script src="{{asset('master/assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
<script src="{{asset('master/assets/static/js/pages/simple-datatables.js')}}"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

@endpush

@push('style')
<link rel="stylesheet" href="{{asset('master/assets/extensions/simple-datatables/style.css')}}">
<link rel="stylesheet" href="{{asset('master/assets/compiled/css/table-datatable.css')}}">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
@endpush
