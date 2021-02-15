@extends('layouts.backend')
@section('content')
    <div class="container">
        <div class="">
            <div>
                @isset($category)
                    <h4>Category : {{ $category->name }}</h4>
                    @else
                @endisset

                @isset($tag)
                    <h4>Tag : {{ $tag->name }}</h4>
                    @else
                @endisset
                    @if (!isset($tag) && !isset($category))
                        <h4>All Story</h4>
                    @endif
                    <hr>
             </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                @forelse ($posts as $post)
                    <div class="card mb-4">
                        @if ($post->thumbnail)
                        <a href="{{ route('posts.show', $post->slug) }}">
                            <img class="thmb md:thmb card-img-top" style="width: 96%" src="{{ $post->takeImage }}">
                        </a>
                        @endif
                    <div class="card-body">
                        <div>
                            <a href="{{ route('categories.show', $post->category->slug) }}" class="text-secondary">
                                <small>
                                    {{ $post->category->name }} - 
                                </small>
                            </a>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('tags.show', $tag->slug) }}" class="text-secondary">
                                    <small>
                                        {{ $tag->name }}
                                    </small>
                                </a>
                            @endforeach
                            </div>
                            <h6>
                                <a class="text-dark card-title" href="{{ route('posts.show', $post->slug) }}">
                                    {{ $post->title }}
                                </a>
                            </h6>
                            <div class="text-secondary my-2">
                                {{ Str::limit($post->body,130,'...') }}
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <div>
                                    <div class="media align-items-center">
                                        <img width="40" height="40" class="rounded-circle mr-3 mt-2" src="../storage/{{ $post->author->avatar }}" alt="">
                                        <div class="media-body">
                                            <div>
                                                {{ $post->author->username }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-secondary mt-4">
                                    <small>
                                        Published on {{ $post->created_at->format("d F, Y") }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                       @empty
                         <div class="col-md-6">
                            <div class="alert alert-info">
                                There's no post    
                            </div>     
                        </div>    
                @endforelse
            </div>
        </div>
        
        {{-- {{ $post->paginate }} --}}
    </div>
@endsection