@extends('layouting.master')
@section('title',"Laporan Stok")

@section('content')
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="container">
                <h1>Laporan Stok</h1>
                <table id="daftarobat" class="table table-striped dataTable-table">
                    <thead>
                        <tr>
                            <th width=10px>No</th>
                            <th>Nama Obat</th>
                            <th>Kategori Obat</th>
                            <th>Stok Obat</th>
                            <th>Satuan</th>
                            <th>Harga Beli </th>
                            <th>Harga Jual </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftar_obats as $index => $daftar_obat)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{$daftar_obat->nama}}</td>
                            <td>{{$daftar_obat->kategoriObat->nama_kategori }}</td>
                            <td>{{$daftar_obat->stok}}</td>
                            <td>{{$daftar_obat->satuan}}</td>
                            <td>Rp {{ number_format($daftar_obat->harga_beli, 0, ',', '.') }}</td>
                            <td>Rp {{ number_format($daftar_obat->harga_jual, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script>
$(document).ready(function () {
    new DataTable('#daftarobat', {
    layout: {
        topStart: {
            buttons: ['excel', 'print','pdf','pageLength']
        }
    }
});

});
</script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
@endpush

@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
@endpush
