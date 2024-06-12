@extends('layouts.pengerjaan')

@section('title', 'Pengerjaan')

@section('list-menu')
    {{-- Livewire Pengerjaan Sidebar Component --}}
    <livewire:pengerjaan.sidebar :instrumens="$instrumens" />
    {{-- Livewire Sidebar Component --}}
@endsection

@section('content')
    {{-- Livewire Pengerjaan Index Component --}}
    <livewire:pengerjaan.index :instrumens="$instrumens" :group_id="$group_id" />
    {{-- Livewire Pengerjaan Index Component --}}
@endsection
