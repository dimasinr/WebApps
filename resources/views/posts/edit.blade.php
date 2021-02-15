@extends('layouts.backend' ,['title' => $title ?? ''])
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.select2multiple').select2();
        });

        $(document).ready(function(){
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
<div class="container">
    <div class="row">
        <div class="col-md-6">
               <div class="card">
                    <div class="card-body">
                        <div class="ta-2 fw-600">Edit : {{ $post->title }}</div><hr>
                            <form action="{{ route('posts.edit', $post->slug) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            @include('partials/form-control', ['submit' => 'Update'])
                        </form>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection