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
                                <button class="btn btn-warning btn-edit" data-id="{{ $kategoriObat->id }}">Edit</button>

                                @method('DELETE')
                                <a href="{{ route('kategori-obats.destroy', $kategoriObat->id) }}"
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

@foreach($kategoriObats as $kategoriObat)
<!-- Modal Edit -->
<div class="modal fade" id="editModal{{ $kategoriObat->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Kategori Obat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm{{ $kategoriObat->id }}" action="{{ route('kategori-obats.update', $kategoriObat->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori{{ $kategoriObat->id }}" value="{{ $kategoriObat->nama_kategori }}" required>
                    </div>
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

<script>


$(document).ready(function () {
    new DataTable('#kategoriObatTable', {
    layout: {
        topStart: {
            buttons: ['excel', 'print','pageLength']
        }
    }
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
                    $('#editModal{{ $kategoriObat->id }}').modal('hide');
                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
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
