@extends('layouts.user')

@section('title')
    Detail Grup
@endsection

@section('content')
    {{-- Livewire Show Components --}}
    <livewire:user.groups.show :group="$group" />
    {{-- Livewire Show Components --}}
@endsection
