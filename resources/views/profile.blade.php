@extends($user->role == 'admin' ? 'layouts.admin' : 'layouts.user')

@section('title')
    Profile
@endsection

@section('content')
    {{-- Livewire Profile Component --}}
    <livewire:profile :user="$user" />
    {{-- Livewire Profile Component --}}
@endsection
