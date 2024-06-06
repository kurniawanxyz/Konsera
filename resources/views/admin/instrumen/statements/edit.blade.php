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
     <a href="{{route('statements.index',$statement->sub_kriteria_id)}}" class="btn btn-primary">Kembali</a>
    </div>
</div>

<div class="">
    <form action="{{route('statements.update',$statement->id)}}" method="post">
        @csrf
        @method("PUT")
        <div class="d-flex flex-column mt-3">
            <label for="text" class="form-label">Pernyataan</label>
            <input type="text" name="text" id="text" class="form-control" value="{{ old('text',$statement->text) }}">
            @error('text')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
       <div class="d-flex flex-column mt-3">
        <label for="favorable" class="form-label">Favorable</label>
        <select class="form-select form-control" name="favorable" id="favorable">
            <option value="" disabled>Pilih Status Favorable</option>
            <option value="fav" {{ old('favorable',$statement->favorable) == 'fav' ? 'selected' : '' }}>Favorable</option>
            <option value="unfav" {{ old('favorable',$statement->favorable) == 'unfav' ? 'selected' : '' }}>UnFavorable</option>
        </select>
        @error('favorable')
            <div class="text-danger">{{ $message }}</div>
        @enderror
       </div>

        <div class="d-flex justify-content-end mt-5">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>
@endsection
