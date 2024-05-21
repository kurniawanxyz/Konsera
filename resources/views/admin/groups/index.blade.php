@extends("layouts.admin")
@section("title")
    Grup
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
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah Anggota</th>
                <th>Jumlah Instrumen</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $groups as $i => $item )
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$item->name}}</td>
                <td>0</td>
                <td>0</td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn  light sharp" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                        </button>
                        <div class="dropdown-menu" style="">
                            <a class="dropdown-item" href="#">Detail</a>
                            <a class="dropdown-item" href="{{route('groups.edit',$item->id)}}">Edit</a>
                            <form action="{{route('groups.destroy',$item->id)}}" method="POST" class="">
                                @csrf
                                @method("DELETE")
                                <button class="dropdown-item" type="submit">Delete</button>
                            </form>

                        </div>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Data tidak ada</td>
            </tr>
            @endforelse
            <div>
                {{
                    $groups->links("pagination::bootstrap-5")
                }}
            </div>
        </tbody>
    </table>
</div>
@endsection
