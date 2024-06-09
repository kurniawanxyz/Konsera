@extends("layouts.admin")
@section("title")
    Kriteria
@endsection
@section("content")
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Kriteria</h4>
            <p class="mb-0">kriteria yang tersedia pada instrumen yang anda pilih</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex gap-3">
     <a href="{{route('instruments.index')}}" class="btn btn-outline-primary">Kembali</a>
     <a href="{{route('criteria.create',$instrumen->id)}}" class="btn btn-primary">Tambah</a>
    </div>
</div>
<div>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Max</th>
            <th>Min</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($criteria as $i => $item)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $item->text }}</td>
            <td>{{$item->point_max}}</td>
            <td>{{$item->point_min}}</td>
            <td>
                <a href="{{ route('criteria.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                <button type="button" onclick="handleConfirmDelete('formDeleteCriteria')" class="btn btn-danger">Delete</button>
                <form id="formDeleteCriteria" action="{{ route('criteria.destroy', $item->id) }}" method="POST" class="d-none" style="display:inline;">
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

@section("script")

@endsection
