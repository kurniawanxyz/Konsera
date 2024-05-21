@extends("layouts.admin")

@section("title")
Edit Grup
@endsection

@section("content")
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Group</h4>
            <p class="mb-0">Daftar nama kelompok yang sudah dibuat</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
     <a href="{{route('groups.create')}}" class="btn btn-primary">Tambah</a>
    </div>
</div>
<div>
    <form action="{{route('groups.update', $group->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="d-flex flex-column mt-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $group->name) }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex flex-column mt-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" id="description">{{ old('description', $group->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex flex-column mt-3">
            <label for="code" class="form-label">Kode Grub</label>
            <input type="text" class="form-control" name="code" id="code" value="{{ old('code', $group->code) }}">
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
