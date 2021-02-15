@extends('layouts.base')
@section('baseStyles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/backend.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">    
@endsection
@section('baseScripts')
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    @stack('scripts')
@endsection
@section('body')
    <x-navbar></x-navbar>
            @yield('content')
@endsection