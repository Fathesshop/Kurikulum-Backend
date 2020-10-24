<div class="form-group">
  <label for="">Thumbnail</label>
  <input type="file" class="form-control-file  @error('thumbnail') is-invalid @enderror" name="thumbnail" id="thumbnail" >
  @error('thumbnail')
  <div class="invalid-feedback">*{{ $message }}</div>
  @enderror
</div>

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $post->title }}">
    @error('title')
    <div class="invalid-feedback">*{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="category">Category</label>
    <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
        <option disabled selected>Choose one!</option>
        @foreach ($categories as $category)
        <option {{ $category->id == $post->category_id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    @error('category')
    <div class="invalid-feedback">*{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="tags">Tag</label>
    <small class="text text-dark">( *press CTRL and CLICK your choices tag )</small>
    <select name="tags[]" id="tags" class="form-control @error('tags') is-invalid @enderror" multiple>
        @foreach ($post->tags as $tag)
        <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
        @foreach ($tags as $tag)
        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>
    @error('tags')
    <div class="invalid-feedback">*{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror">{{ old('body') ?? $post->body }}</textarea>
    @error('body')
    <div class="invalid-feedback">*{{ $message }}</div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{ $submit ?? 'Update'}}</button>