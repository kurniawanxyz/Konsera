@extends('layouts.user')
@section('title', 'Detail Rekap')
@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Rekap Nilai </h1>
                <p>Kamu mendapatkan <span class="badge bg-info">{{$rekap['pengerjaan']['pivot']['points']}} point</span>, kamu tergolong dalam kriteria <span class="badge bg-info">{{$rekap['criteria']['text']}}</span> </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nilai Berdasarkan Sub Kriteria</h4>
                </div>
                <div class="card-body">
                    <canvas id="tes"></canvas>
                </div>
            </div>
        </div>
    </div>

    @forelse ($rekap['nilaiTiapSubKriteria'] as $item)
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <h2 class="m-0">{{ $item['text'] }}</h2>
                        @if ($item['pivot']['status'] == 'tinggi')
                            <span class="text-uppercase badge bg-success">{{ $item['pivot']['status'] }}</span>
                        @elseif ($item['pivot']['status'] == 'sedang')
                            <span class="text-uppercase badge bg-warning">{{ $item['pivot']['status'] }}</span>
                        @else
                            <span class="text-uppercase badge bg-danger">{{ $item['pivot']['status'] }}</span>
                        @endif
                        <span></span>
                    </div>
                    <p>{{$item['description']}}</p>
                </div>
            </div>
        </div>
    @empty
    @endforelse
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"
        integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        console.log("Tes");
        const labels = @json($rekap['label']);
        const data = {
            labels: labels,
            datasets: [{
                label: 'Nilai Berdasarkan Sub Kriteria/Variabel',
                data: @json($rekap['nilaiPoin']),
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
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        min: 0, // Set minimum value for y-axis
                        max: 100,
                        ticks: {
                            stepSize: 10
                        }
                    }
                }
            },
        };
        const ctx = $("#tes");
        new Chart(ctx, config)
    </script>
@endsection
