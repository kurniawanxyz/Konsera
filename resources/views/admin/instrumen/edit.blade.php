@extends("layouts.admin")
@section("title")
    Instrumen
@endsection
@section("content")
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Instrumen</h4>
            <p class="mb-0">Form untuk memperbarui instrumen</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
     <a href="{{route('instruments.index')}}" class="btn btn-primary">Kembali</a>
    </div>
</div>
<div class="page-titles mx-0 d-flex">
    <a href="{{ route('instruments.edit',$instrumen->id) }}" class="btn {{ request()->routeIs('instruments.edit',$instrumen->id) ? 'btn-primary' : 'btn-outline-primary' }}">Instrumen</a>
    <a href="{{ route('groups.index') }}" class="btn {{ request()->routeIs('groups.index') ? 'btn-primary' : 'btn-outline-primary' }}">Opsi Jawaban</a>
    <a href="{{ route('groups.index') }}" class="btn {{ request()->routeIs('groups.index') ? 'btn-primary' : 'btn-outline-primary' }}">Kriteria</a>
    <a href="{{ route('groups.index') }}" class="btn {{ request()->routeIs('groups.index') ? 'btn-primary' : 'btn-outline-primary' }}">Sub Variabel Penilaian</a>
</div>
<div class="">
    <form action="{{route('instruments.update', '')}}/{{$instrumen->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="d-flex flex-column mt-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $instrumen->title) }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex flex-column mt-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $instrumen->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex justify-content-end mt-3">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
