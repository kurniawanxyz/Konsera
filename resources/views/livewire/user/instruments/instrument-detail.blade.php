<div>
    {{-- Header --}}
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>{{ $instrument->title }}</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <a href="{{ url()->previous() }}" class="btn btn-primary" wire:navigate>Kembali</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <span class="card-title">Deskripsi:</span>
                    <p><p class="mb-0">{{ $instrument->description }}</p></p>
                </div>
            </div>
        </div>
    </div>
    {{-- Header --}}

    {{-- Criterias Card --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Kriteria</h4>
        </div>
        <div class="card-body">
            @forelse ($criterias as $criteria)
                <h4 class="text-black fw-bold">{{ $criteria->text }}</h4>
                <h5>Point Max: {{ $criteria->point_max }}</h5>
                <h5>Point Min: {{ $criteria->point_min }}</h5>
                <hr>
            @empty
                <h5>Instumen ini tidak memiliki kriteria</h5>
            @endforelse
        </div>
    </div>
    {{-- Criterias Card --}}

    {{-- Sub Criteria Card Header --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Sub-Kriteria</h4>
        </div>
    </div>
    {{-- Sub Criteria Card Header --}}

    {{-- SubCriterias Card --}}
    @forelse ($sub_criterias as $sub_criteria)
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12">
                        <h4 class="card-title">{{ $sub_criteria->text }}</h4>
                    </div>
                    <div class="col-12">
                        <p class="p-0 m-0">{{ $sub_criteria->description }}</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4 class="text-black fw-bold">Daftar pernyataan:</h4>
                <hr>
                @forelse ($sub_criteria->statements as $statement)
                    <h5>{{ $statement->text }}</h5>
                    <h5>Jenis Favorable: {{ $statement->favorable }}</h5>
                    <hr>
                @empty
                    <h5>Sub Kriteria ini tidak memiliki pernyataan</h5>
                @endforelse
                <hr>
            </div>
        </div>
    @empty
        <h5>Instumen ini tidak memiliki kriteria</h5>
    @endforelse
    {{-- SubCriterias Card --}}

    {{-- Answers Card --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Opsi Jawaban</h4>
        </div>
        <div class="card-body">
            @forelse ($answers as $answer)
                <h4 class="text-black fw-bold">{{ $answer->text }}</h4>
                <h5>Point Fav: {{ $answer->point_fav }}</h5>
                <h5>Point Unfav: {{ $answer->point_unfav }}</h5>
                <hr>
            @empty
                <h5>Instumen ini tidak memiliki opsi jawaban</h5>
            @endforelse
        </div>
    </div>
    {{-- Answers Card --}}
</div>
