@extends("layouts.admin")
@section("title")
    Instrumen
@endsection
@section("content")
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Instrumen</h4>
            <p class="mb-0">Form untuk menambahkan instrumen</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
     <a href="{{route('instruments.index')}}" class="btn btn-primary">Kembali</a>
    </div>
</div>
<div class="">
    <form action="{{route('instruments.store')}}" method="post">
        @csrf
        <div class="d-flex flex-column mt-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex flex-column mt-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
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
