@extends('layouts.user')

@section('title')
    Dashboard User
@endsection

@section('content')
    {{-- Livewire Index Component --}}
        <livewire:user.components.group-list />
    {{-- Livewire Index Component --}}
@endsection
