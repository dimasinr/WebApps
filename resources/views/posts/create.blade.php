@extends('layouts.app')
@push('scripts')
    <script>
        $(document).ready(function(){
            $('.select2multiple').select2();
        
            $('.dropify').dropify({
            messages: {
                default: 'Picture',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
        });    
    });
    </script>
@endpush
@section('content')
<div id="bgGre">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4 ta-2 fw-600">New Post</div><hr>
                        <form action="/posts/store" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @include('partials/form-control', ['submit' => 'Create'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection