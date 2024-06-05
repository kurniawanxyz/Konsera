@extends("layouts.admin")
@section("title")
    Instrumen
@endsection
@section("content")
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Instrumen</h4>
            <p class="mb-0">Daftar Instrumen yang sudah dibuat</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
     <a href="{{route('instruments.create')}}" class="btn btn-primary">Tambah</a>
    </div>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Jumlah Grup</th>
                <th>Jumlah Peserta</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($instrumens as $i => $item)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$item->title}}</td>
                <td>0</td>
                <td>0</td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn  light sharp" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                        </button>
                        <div class="dropdown-menu" style="">
                            <a class="dropdown-item" href="{{route('instruments.show', $item->id)}}">Detail</a>
                            <a class="dropdown-item" href="{{route('instruments.edit',$item->id)}}">Edit</a>
                            <form action="{{route('instruments.destroy',$item->id)}}" method="POST" class="">
                                @csrf
                                @method("DELETE")
                                <button class="dropdown-item" type="submit">Delete</button>
                            </form>
                            <a class="dropdown-item" href="{{route('criteria.index',$item->id)}}">Kriteria</a>
                        </div>
                    </div>
                </td>
            </tr>
            @empty

            @endforelse
        </tbody>
    </table>
</div>
@endsection
