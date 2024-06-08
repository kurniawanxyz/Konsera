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
        <div class="d-flex flex-column mt-3">
            <label for="groups" class="form-label">Hak Akses Grup</label>
            <select multiple class="form-select py-2" name="groups[]" id="groups">
                @php
                    $groupAccess = $instrumen->groups()->pluck("id")->toArray();
                @endphp
                {{-- <option disabled selected >Pilih Group</option> --}}
                @forelse ($groups as $item )
                    <option @selected(in_array($item->id,$groupAccess)) value="{{$item->id}}">{{$item->name}}</option>
                @empty

                @endforelse
            </select>
            @error('groups')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        <label for="isPublishedPublic" class="form-label d-flex align-items-center gap-2 mt-3">
            <span>Publish Instrumen</span>
        </label>
        <div class="d-flex align-items-center gap-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="isPublished" id="isPublishedPublic" value="1" 
                       @checked($instrumen->isPublished == true)>
                <label class="form-check-label" for="isPublishedPublic">
                    Public
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="isPublished" id="isPublishedPrivate" value="0" 
                       @checked($instrumen->isPublished == false)>
                <label class="form-check-label" for="isPublishedPrivate">
                    Private
                </label>
            </div>
        </div>
        
            @error('isPublished')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="d-flex justify-content-end mt-3">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

@section("script")
    <script>
        $("#groups").select2({

        })
    </script>
@endsection
