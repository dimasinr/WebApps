    <div class="form-group mt-4">
        <input type="file" name="thumbnail" class="dropify" id="input-file-now">
        @error('thumbnail')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title') ?? $post->title }}" placeholder="Type a title for the story..." id="title" class="form-control @error('title') is-invalid @enderror">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
            <option disabled selected>Choose Category</option>
            @foreach ($categories as $category)
            <option {{ $category->id == $post->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="tags">Tag</label>
        <select name="tags[]" id="tags" class="form-control select2multiple col-lg-15" style="width: 100%" multiple>
            @foreach ($tags as $tag)
                <option {{ $post->tags()->find($tag->id) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
        @error('tags')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="body"></label>
        <textarea placeholder="Type your story in here..." name="body" id="body" cols="65" rows="5" class="form-control @error('body') is-invalid @enderror">{{ old('body') ?? $post->body }}</textarea>
        @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

<button type="submit" class="btn btn-wi" style="width: 35%">{{ $submit ?? 'update'}}</button>