@extends('layouting.master')
@section('title',"Manajemen Produk")

@section('content')
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="container">
                <h1>Kategori Obat</h1>
                <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">Tambah
                    Kategori Obat</button>
                 <table id="kategoriObatTable" class="table table-striped dataTable-table">
                    <thead>
                        <tr>
                            <th width=10px>No</th>
                            <th>Nama</th>
                            <th width=250px>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategoriObats as $index => $kategoriObat)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $kategoriObat->nama_kategori }}</td>
                            <td>
                                <button class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $kategoriObat->id }}">Edit</button>

                                    @method('DELETE')
                                    <a href="{{ route('kategori-obats.destroy', $kategoriObat->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Tambah Kategori Obat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('kategori-obats.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" required>
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

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Kategori Obat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('kategori-obats.update', $kategoriObat->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" value="" required>
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


@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#kategoriObatTable').DataTable({
        responsive: true,
    });

});
$(document).on('click', '.btn-edit', function () {
            var dataId = $(this).data('id');
            var formAction = '/kelola_kategori/update/' + dataId;
            $('#editForm').attr('action', formAction);

            // Membuat permintaan Ajax untuk mendapatkan data informasi
            $.ajax({
                url: '/kelola_kategori/' + dataId + '/edit',
                method: 'GET',
                success: function (response) {
                    // Isi formulir penyuntingan dengan data yang diambil dari server
                    var data = response.kategori;
                    $('#editModal').find('#namakategori').val(data.Nama_Kategori);
                    $('#editModal').find('#keterangan').val(data.Keterangan);
                    $('#editModal').modal('show');
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

</script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
@endpush

@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
@endpush
