@extends('layouts.admin')

@section('title', 'Rekap')

@if ($user->pengerjaanByInstrumen()->where('instrumen_id', $instrumen_id)->first() != null)
    @section('content')
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h1 class="fs-3">Rekap</h1>
                    <p class="mb-0">Rekap dari instrumen yang sudah dikerjakan</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <a href="{{ route('groups.show', $group_id) }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        <h2 class="fs-3">Informasi Anggota</h2>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body px-md-0 py-3 px-3">
                        <div class="card-title">
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <img width="100" class="d-block mx-auto rounded-circle"
                                        src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/images/avatar/default-avatar.jpg') }}"
                                        alt="" />
                                </div>
                                <div class="col-md-8 d-flex justify-content-start flex-column">
                                    <span>{{ $user->name }}</span>
                                    <p class="fs-5 ">Mendapatkan nilai <span class="badge badge-info">
                                            {{ $rekap->pivot->points }} points </span> dan masuk dalam kriteria <span
                                            class="badge badge-info">{{ $rekap->criteria()->where('instrumen_id', $instrumen_id)->first()->text }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="fs-3 mt-3">Statistik Pribadi</h2>
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-md-12">
                        <canvas id="tes"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="fs-3 mt-3">Hasil Tiap Sub Kriteria/Variabel</h2>
        <div class="row">
            @forelse ($subVariabel as $item)
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <h3 class="card-title m-0">{{ $item->text }}</h3>
                                @if ($item['pivot']['status'] == 'tinggi')
                                    <span class="text-uppercase badge bg-success">{{ $item['pivot']['status'] }}</span>
                                @elseif ($item['pivot']['status'] == 'sedang')
                                    <span class="text-uppercase badge bg-warning">{{ $item['pivot']['status'] }}</span>
                                @else
                                    <span class="text-uppercase badge bg-danger">{{ $item['pivot']['status'] }}</span>
                                @endif
                            </div>
                            <div class="d-flex flex-column mt-3">
                                <h4>Deskripsi:</h4>
                                <p>{{$item->description}}</p>
                            </div>
                            <div class="d-flex flex-column mt-3">
                                <h4>Solusi yang ditawarkan:</h4>
                                <p>{{$item->solutions??"Belum mengatur solusi"}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    @endsection
@else
    @section('content')
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h1 class="fs-3">Rekap</h1>
                    <p class="mb-0">Rekap dari instrumen yang sudah dikerjakan</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <a href="{{ route('groups.show', $group_id) }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>

        <div class="mt-5 container border d-flex justify-content-center align-items-center flex-column">
            <img width="200" class="rounded-circle d-block mx-auto" style="object-fit: cover"
                src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/images/avatar/default-avatar.jpg') }}"
                alt="">
            <span class="mt-3 fs-3"> <span class="badge bg-primary"> {{ $user->name }}</span> belum mengerjakan
                instrumen</span>
        </div>
    @endsection

@endif

@section('script')
    <script>
        console.log("Tes");
        const labels = @json($labels);
        const data = {
            labels: labels,
            datasets: [{
                label: 'Nilai Berdasarkan Sub Kriteria/Variabel',
                data: @json($persentase),
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        const config = {
            type: 'horizontalBar', // Mengubah tipe chart menjadi horizontalBar
            data: data,
            options: {
                indexAxis: 'y', // Mengatur sumbu indeks menjadi sumbu Y
                scales: {
                    x: { // Mengatur skala untuk sumbu X
                        min: 0, // Set nilai minimum untuk sumbu X
                        max: 100,
                        ticks: {
                            stepSize: 10
                        }
                    },
                    y: { // Mengatur skala untuk sumbu Y
                        // Anda bisa menambahkan konfigurasi tambahan untuk sumbu Y di sini
                    }
                }
            }
        };

        const ctx = $("#tes");
        new Chart(ctx, config)
    </script>
@endsection
