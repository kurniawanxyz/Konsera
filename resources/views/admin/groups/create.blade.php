@extends("layouts.admin")

@section("title")
Tambah Group
@endsection

@section("content")
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Groups</h4>
            <p class="mb-0">Halaman untuk menambahkan Groups</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
     <a href="{{route('groups.index')}}" class="btn btn-primary">Kembali</a>
    </div>
</div>
<div>
    <form action="{{route('groups.store')}}" method="post">
        @csrf
        <div class="d-flex flex-column mt-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex flex-column mt-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" id="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex flex-column mt-3">
            <label for="code" class="form-label">Kode Grub</label>
            <input type="text" class="form-control" name="code" id="code" value="{{ old('code') }}">
            @error('code')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex justify-content-end mt-5">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
