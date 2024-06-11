@extends("layouts.admin")
@section("title")
    Statements
@endsection
@section("content")


<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Statements</h4>
            <p class="mb-0">Daftar Statements</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex gap-3">
     <a href="{{route('subCriteria.index',$instrumen_id)}}" class="btn btn-outline-primary">Kembali</a>
     <a href="{{route('statements.create',$sub_criteria_id)}}" class="btn btn-primary">Tambah</a>
    </div>
</div>
<div>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Pernyataan</th>
            <th>Favorable</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($statements as $i => $item)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $item->text }}</td>
            <td>{{$item->favorable}}</td>
            <td>
                <a href="{{ route('statements.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                <button type="button" onclick="handleConfirmDelete('statement-{{$item->id}}')" class="btn btn-danger">Delete</button>
                <form id="statement-{{$item->id}}" action="{{ route('statements.destroy', $item->id) }}" method="POST" class="d-none" style="display:inline;">
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

