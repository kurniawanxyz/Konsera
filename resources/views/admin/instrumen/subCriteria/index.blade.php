@extends("layouts.admin")
@section("title")
    Sub Kriteria
@endsection
@section("content")
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
                <button type="button" onclick="handleConfirmDelete('deleteSubCriteria')" class="btn btn-danger">Delete</button>
                <form id="deleteSubCriteria" action="{{ route('subCriteria.destroy', $item->id) }}" method="POST" class="d-none" style="display:inline;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Anda belum mengatur kriteria untuk Instrumen ini</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>
@endsection

