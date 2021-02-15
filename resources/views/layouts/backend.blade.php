@extends('layouts.base')
@section('baseStyles')
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/backend.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
@endsection
@section('baseScripts')
    <script src="{{ asset('js/backend.js') }}"></script>
    @stack('scripts')
@endsection
@section('body')
    <div class="app">
        <x-navbar></x-navbar>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@endsection