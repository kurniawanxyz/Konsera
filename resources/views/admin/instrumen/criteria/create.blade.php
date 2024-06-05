@extends("layouts.admin")
@section("title")
    Kriteria
@endsection
@section("content")
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Kriteria</h4>
            <p class="mb-0">Form untuk menambahkan kriteria pada instrumen</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
     <a href="{{route('criteria.index',$instrumen_id)}}" class="btn btn-primary">Kembali</a>
    </div>
</div>

<div class="">
    <form action="{{route('criteria.store', '')}}/{{$instrumen_id}}" method="post">
        @csrf
        <div class="d-flex flex-column mt-3">
            <label for="text" class="form-label">Nama</label>
            <input type="text" name="text" id="text" class="form-control" value="{{ old('text') }}">
            @error('text')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex flex-column mt-3">
            <label for="point_min" class="form-label">Point Min</label>
            <input class="form-control" type="number" name="point_min" id="point_min" min="0">
            @error('point_min')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex flex-column mt-3">
            <label for="point_max" class="form-label">Point Max</label>
            <input class="form-control" type="number" name="point_max" id="point_max" min="0">
            @error('point_max')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-end mt-5">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>
@endsection
