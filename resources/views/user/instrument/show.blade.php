@extends('layouts.user')

@section('title')
    Detail Instrumen
@endsection

@section('content')
    {{-- Livewire Instrument Detail Component --}}
    <livewire:user.instruments.instrument-detail :instrument="$instrument" />
    {{-- Livewire Instrument Detail Component --}}
@endsection
