@extends('layouts.admin')

@section('title')
    Buku
@endsection

@section('content')
    {{-- Livewire Books Index Component --}}
    <livewire:admin.books.index />
    {{-- Livewire Books Index Component --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
