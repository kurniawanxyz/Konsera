@extends('layouts.user')

@section('title', 'Rekap Pengerjaan')

@section('content')
    {{-- Header --}}
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Rekap Pengerjaan</h4>
                <p class="mb-0">Daftar rekap pekerjaan anda</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <a wire:navigate href="{{ route('user.dashboard') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    {{-- Header --}}

    {{-- Rekap List --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Rekap Pengerjaan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th style="width:80px;"><strong>No.</strong></th>
                            <th><strong>Group</strong></th>
                            <th><strong>Instrumen</strong></th>
                            <th><strong>Kriteria</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($rekap as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item['instrumen']['title'] }}</td>
                                <td>{{ $item['group']['name'] }}</td>
                                <td>{{ $item['criteria']['text'] }}</td>
                                <td>
                                    <a href="{{ route('rekap.show', ['group_id' => $item['group']['id'], 'instrumen_id' => $item['instrumen']['id']]) }}"
                                        class="btn btn-warning">Detail</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="12">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Rekap List --}}
@endsection
