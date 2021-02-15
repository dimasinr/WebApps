<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\{Category,Tag,Post};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'index','show',
        ]);
    }

    public function index()
    {
        return view('posts.index',[
            'posts' => Post::with('tags','category')->latest()->paginate(6),
        ]);
    }
    
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create',[
            'post' => new Post(),
            'categories' => Category::get(),
            'tags' => Tag::get(),
        ]);
    }

    public function store(PostRequest $request)
    {
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg'
        ]);

        $attr = $request->all();
        
        $slug = Str::slug(request('title'));
        $attr['slug'] = $slug;

        $thumbnail = request()->file('thumbnail') ? request()->file('thumbnail')->store("images/posts") : null;

        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnail;

        $post = auth()->user()->posts()->create($attr);

        $post->tags()->attach(request('tags'));

        session()->flash('success' , 'The post was created');

        return redirect('posts');
    }

    public function edit(Post $post)
    {
        return view('posts.edit',[
            'post' => $post,
            'categories' => Category::get(),
            'tags' => Tag::get(),
        ]);
    }

    public function update(PostRequest $request, Post $post)
    {
        // dd($post);

        $request->validate([
            'thumbnail' => 'image|mimes:jpg,jpeg,png'
        ]);

        $this->authorize('update', $post);

        if (request()->file('thumbnail')){
            Storage::delete($post->thumbnail);
            $thumbnail = request()->file('thumbnail')->store("images/posts");
        }else{
            $thumbnail = $post->thumbnail;
        }

        $attr = $request->all();
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnail;

        $post->update($attr);
        $post->tags()->sync(request('tags'));

        session()->flash('success' , 'The post was update');
        return redirect('posts');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete',$post);

        Storage::delete($post->thumbnail);
        $post->tags()->detach();
        $post->delete();
        session()->flash('success', 'The post was deleted');
        return redirect('posts');
    }
}