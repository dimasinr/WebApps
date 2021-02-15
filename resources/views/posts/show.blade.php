@extends('layouts.backend')
@section('title', $post->title)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if ($post->thumbnail)
                    <img src="{{ $post->takeImage }}" class="thmb rounded">
                @endif
                <h4 class="mt-3"><p>{{ $post->title }}</h4><p><hr>
                    <div class="text-secondary">
                        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                        &middot; {{ $post->created_at->format("d F, Y") }}
                        &middot;
                        @foreach ($post->tags as $tag)
                            <a href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                        @endforeach

                        <div class="media my-2">
                            <img width="50" height="45" class="rounded-circle mr-3 mt-2" src="../storage/{{ $post->author->avatar }}" alt="">
                            <div class="media-body">
                                <div>
                                    {{ $post->author->name }}
                                </div>
                                {{ '@' . $post->author->username }}
                            </div>
                        </div>
                    </div>
                <hr>
                <p>
                    {!! nl2br($post->body) !!}
                </p>
                <div>
                    @can('delete', $post)
                    <div class="flex mt-3">
                        <!-- Button trigger modal -->
                        <a href="{{ route('posts.edit',$post->slug) }}" class="btn btn-link text-success btn-sm p-0">Edit</a>
                    
                        <button type="button" class="btn btn-link text-danger btn-sm p-0" data-toggle="modal" data-target="#exampleModal">
                          Delete
                        </button>
                      </div>

                      {{-- Modal --}}
                       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this post ?</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <div>{{ $post->title }}</div>
                                                    <div class="text-secondary">
                                                        <small>Published: {{ $post->created_at->format("d F, Y") }}</small>
                                                    </div>
                                                </div>
                                            <form action="/posts/{{ $post->slug }}/delete" method="post">
                                                @csrf
                                                @method("delete")
                                                <div class="modal-footer"> 
                                                    <div class="d-flex">
                                                    <button class="btn btn-danger mr-2" type="submit">Yes</button>
                                                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>     
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection