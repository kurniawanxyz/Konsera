@extends("layouts.admin")
@section("title")
    Sub Kriteria
@endsection
@section("content")

<div class="modal fade" id="basicModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('subCriteria.import',$instrumen_id)}}" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                    @csrf
                    <div class="d-flex flex-column mt-3">
                        <label for="excel" class="form-label">File Excel</label>
                        <input type="file" name="excel" id="excel" class="form-control-file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Sub Kriteria</h4>
            <p class="mb-0">Daftar sub kriteria</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex gap-3">
     <a href="{{route('instruments.index')}}" class="btn btn-outline-primary">Kembali</a>
     <a href="{{route('subCriteria.create',$instrumen_id)}}" class="btn btn-primary">Tambah</a>
     <button data-bs-toggle="modal" data-bs-target="#basicModal" class="btn btn-success">Tambah Pernyataan</button>
    </div>
</div>
<div>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Sub Kriteria</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($subCriterias as $i => $item)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $item->text }}</td>
            <td>
                <a href="{{ route('subCriteria.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                <button type="button" onclick="handleConfirmDelete('deleteSubCriteria-{{$item->id}}')" class="btn btn-danger">Hapus</button>
                <form id="deleteSubCriteria-{{$item->id}}" action="{{ route('subCriteria.destroy', $item->id) }}" method="POST" class="d-none" style="display:inline;">
                    @csrf
                    @method('DELETE')
                </form>
                <a href="{{ route('statements.index', $item->id) }}" class="btn btn-success">Pernyataan</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Anda belum mengatur kriteria untuk Instrumen ini</td>
        </tr>
        @endforelse
    </tbody>
</table>
{{
    $subCriterias->links("pagination::bootstrap-5")
}}
</div>
@endsection

