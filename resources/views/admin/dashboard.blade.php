@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')

<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h1 class="fs-3">Dashboard</h1>
            <p class="mb-0">Halaman Dashboard Admin</p>
        </div>
    </div>
    {{-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
     <a href="{{route('instruments.create')}}" class="btn btn-primary">Tambah</a>
    </div> --}}
</div>

   <div class="row">
        <div class="col-md-3">
            <div class="last">
                <div class="card overflow-hidden">
                    <div class="card-body d-flex align-items-center">
                        <div class="me-4">
                            <p class="mb-2 fs-13">Pengguna</p>
                            <h2 class="text-black mb-0 font-w600">{{$data["user"]}}</h2>
                        </div>
                        {{-- <i class="fa fa-users text-primary fs-1" aria-hidden="true"></i> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="last">
                <div class="card overflow-hidden">
                    <div class="card-body d-flex align-items-center">
                        <div class="me-4">
                            <p class="mb-2 fs-13">Grup</p>
                            <h2 class="text-black mb-0 font-w600">{{$data['grup']}}</h2>
                        </div>
                        {{-- <i class="flaticon-381-user-3 fs-1 text-secondary"></i> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="last">
                <div class="card overflow-hidden">
                    <div class="card-body d-flex align-items-center">
                        <div class="me-4">
                            <p class="mb-2 fs-13">Instrumen</p>
                            <h2 class="text-black mb-0 font-w600"> {{$data['instrumen']}} </h2>
                        </div>
                       {{-- <i class="fa fa-book-reader fs-1 text-warning"></i> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="last">
                <div class="card overflow-hidden">
                    <div class="card-body d-flex align-items-center">
                        <div class="me-4">
                            <p class="mb-2 fs-13">Buku</p>
                            <h2 class="text-black mb-0 font-w600"> {{$data['buku']}} </h2>
                        </div>
                       {{-- <i class="fa fa-book-reader fs-1 text-warning"></i> --}}
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection
@section('script')
    {{-- <script src="{{ asset('assets/js/dashboard/dashboard-2.js') }}"></script>
    <script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script> --}}
@endsection
