@extends('layouts.base')
@section('baseStyles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/backend.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('baseScripts')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
           $('.select2').select2({
               placeholder:"Choose Some Tags"   
           });
        });    
    </script>
@endsection
@section('body')
    <div id="app">
        <x-navbar></x-navbar>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@endsection
