@extends("layouts.admin")
@section("title","Detail Grup")

@section("content")
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>{{$group->name}}</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
     <a href="{{route('groups.index')}}" class="btn btn-primary">Kembali</a>
    </div>
    <div class="col-12 p-md-0">
        <p>{{$group->description}}</p>
        <p class="mb-0 ">kode: <span class="badge bg-info">{{$group->code}}</span></p>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tab Infromasi</h4>
            </div>
            <div class="card-body">
                <!-- Nav tabs -->
                <div class="default-tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="la la-user me-2"></i> Anggota</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile"><i class="la la-book me-2"></i> Instrumen</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="home" role="tabpanel">
                            <div class="pt-4">
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @forelse ($group->user as $i => $item)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Rekap</a>
                                                <div class="dropdown-menu">
                                                    @forelse ($group->instrumens as $data)
                                                        <a href="{{route('admin.rekap.index',["user_id" => $item->id,"instrumen_id" => $data->id,"group_id" => $group->id])}}" style="cursor: pointer;" class="dropdown-item">{{$data->title}}</a>
                                                    @empty
                                                        <a style="cursor: pointer;" class="dropdown-item">Tidak adad instrumens</a>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Tidak ada data</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                              </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="pt-4">
                               <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        {{-- <th></th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $group->instrumens as $i => $item )
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$item->title}}</td>
                                    </tr>
                                    @empty

                                    @endforelse
                                </tbody>
                               </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
