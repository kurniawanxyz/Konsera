@extends("layouts.admin")
@section("title")
    Opsi Jawaban
@endsection
@section("content")
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Opsi Jawaban</h4>
            <p class="mb-0">Form untuk menambahkan Opsi Jawaban pada instrumen</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
     <a href="{{route('answer.index',$answer->instrumen_id)}}" class="btn btn-primary">Kembali</a>
    </div>
</div>

<div class="">
    <form action="{{route('answer.update', $answer->instrumen_id)}}" method="post">
        @csrf
        @method("PUT")
        <div class="d-flex flex-column mt-3">
            <label for="text" class="form-label">Text</label>
            <input type="text" name="text" id="text" class="form-control" value="{{ old('text',$answer->text) }}">
            @error('text')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex flex-column mt-3">
            <label for="point_fav" class="form-label">Point Fav</label>
            <input class="form-control" type="number" name="point_fav" id="point_fav" min="0" value="{{ old('point_fav',$answer->point_fav) }}">
            @error('point_fav')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex flex-column mt-3">
            <label for="point_unfav" class="form-label">Point Unfav</label>
            <input class="form-control" type="number" name="point_unfav" id="point_unfav" min="0" value="{{ old('point_unfav',$answer->point_unfav) }}" >
            @error('point_unfav')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-end mt-5">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>
@endsection
