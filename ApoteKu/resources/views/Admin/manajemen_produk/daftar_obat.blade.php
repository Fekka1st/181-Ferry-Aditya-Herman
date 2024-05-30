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
                            <th width=250px>Aksi</th>
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
                            <td>
                                <button class="btn btn-warning btn-edit" data-id="{{ $daftar_obat->id }}">Edit</button>

                                @method('DELETE')
                                <a href="{{ route('daftar-obats.destroy', $daftar_obat->id) }}"
                                    class="btn btn-danger" data-confirm-delete="true">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

{{-- Modal --}}
<!-- Modal Tambah -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Tambah Daftar Obat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('daftar-obats.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Obat</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori_obats_id" class="form-label">Kategori Obat</label>
                        <select class="form-control" name="kategori_obats_id" id="kategori_obats_id" required>
                            @foreach($kategori_obats as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga_beli" class="form-label">Harga Beli</label>
                        <input type="number" class="form-control" name="harga_beli" id="harga_beli" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_jual" class="form-label">Harga Jual</label>
                        <input type="number" class="form-control" name="harga_jual" id="harga_jual" required>
                    </div>
                    <div class="mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" class="form-control" name="satuan" id="satuan" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

@foreach($daftar_obats as $daftar_obat)
<!-- Modal Edit -->
<div class="modal fade" id="editModal{{ $daftar_obat->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Daftar Obat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm{{ $daftar_obat->id }}" action="{{ route('daftar-obats.update', $daftar_obat->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Obat</label>
                    <input type="text" class="form-control" name="nama" id="nama{{ $daftar_obat->id }}" value="{{ $daftar_obat->nama }}" required>
                </div>
                <div class="mb-3">
                    <label for="kategori_obats_id" class="form-label">Kategori Obat</label>
                    <select class="form-select" name="kategori_obats_id" id="kategori_obats_id{{ $daftar_obat->id }}" required>
                        @foreach($kategori_obats as $kategori_obat)
                            <option value="{{ $kategori_obat->id }}" {{ $daftar_obat->kategori_obats_id == $kategori_obat->id ? 'selected' : '' }}>
                                {{ $kategori_obat->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="harga_beli" class="form-label">Harga Beli</label>
                    <input type="text" class="form-control" name="harga_beli" id="harga_beli{{ $daftar_obat->id }}" value="{{ $daftar_obat->harga_beli }}" required>
                </div>
                <div class="mb-3">
                    <label for="harga_jual" class="form-label">Harga Jual</label>
                    <input type="text" class="form-control" name="harga_jual" id="harga_jual{{ $daftar_obat->id }}" value="{{ $daftar_obat->harga_jual }}" required>
                </div>
                <div class="mb-3">
                    <label for="satuan" class="form-label">Satuan</label>
                    <input type="text" class="form-control" name="satuan" id="satuan{{ $daftar_obat->id }}" value="{{ $daftar_obat->satuan }}" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script>
    $(document).ready(function() {
    $('#daftarobat').DataTable({
        responsive: true,
    });
});
</script>
<script>
     $(document).ready(function () {
        $('.btn-edit').click(function () {
            var id = $(this).data('id');
            $('#editModal' + id).modal('show');
        });

        $('#editForm').submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var formData = form.serialize();

            $.ajax({
                url: url,
                type: 'PUT',
                data: formData,
                success: function (response) {
                    $('#editModal{{ $daftar_obat->id }}').modal('hide');
                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
@endpush

@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
@endpush
