@extends('layouts.frontend')
@push('scripts')
    <script>
        $('.dropify').dropify({
            messages: {
                default: 'Picture',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
        });    
    </script>
@endpush
@section('content')
    <div id="bGre">
        <div class="container py-3">
            <div class="ml-3 mr-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card2a shadow-sm">
                            <div class="card-body">
                                <div class="ta-2" style="font-weight: 600">
                                    Update Profile
                                </div><hr>
        
                                <div class="py-4">

                                <form action="{{ route('avastore') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')

                                    <img src="../storage/{{ Auth::user()->avatar }}" class="rounded-circle ava center mt-2">
                                    <br>
                                    <div class="form-group row">
                                        <label for="avatar" class="col-md-3 col-form-label text-md-right"></label>
            
                                        <div class="col-md-6">
                                            <input type="file" name="avatar" id="input-file-now" class="dropify">
                                            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label text-md-right"></label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control md:w-100 br-15 @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" name="name" value="{{ Auth::user()->name }}" required autocomplete="off" autofocus>
            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="username" class="col-md-3 col-form-label text-md-right"></label>
            
                                        <div class="col-md-6">
                                            <input id="username" type="text" class="form-control md:w-100 br-15 @error('username') is-invalid @enderror" placeholder="{{ __('Username') }}" name="username" value="{{ Auth::user()->username }}" required autocomplete="off" autofocus>
            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label text-md-right"></label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="text" class="form-control md:w-100 br-15 @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}" name="email" value="{{ Auth::user()->email }}" required autocomplete="off" autofocus>
            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="bio" class="col-md-3 col-form-label text-md-right"></label>
            
                                        <div class="col-md-6">
                                            <textarea name="bio" id="bio" cols="30" class="form-control md:w-100 br-15" rows="5">{{ Auth::user()->bio }}</textarea>
                                            
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-wi">Update</button>
                                        </div>
                                    </div>

                                </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
       const bGre = document.querySelector('#bGre');
       bGre.style.backgroundColor = 'rgb(243, 243, 243)';
    </script>
@endsection