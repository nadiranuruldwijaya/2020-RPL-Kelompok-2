<article class="card card-outline mb-4">
    <div class="card-body">
      <header>
        <h4 class="card-title">Create</h4>
      </header>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
          <label class="custom-file-label" for="customFile">Choose file</label>
              @error('thumbnail')
                  <div class="text-danger mt-2">
                      {{ $message }}
                  </div>
              @enderror
        </div>

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        @error('title')
            <div class="text-danger mt-2">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control" id="category" name="category">
            <option disabled selected>Choose One!</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
          @error('category')
            <div class="text-danger mt-2">
                {{ $message }}
            </div>
         @enderror
        </div>
        <div class="form-group">
          <label for="tags">Tag</label>
          <select multiple class="form-control" id="tags" name="tags[]" multiple="">
            @foreach ($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
          </select>
          @error('tags')
            <div class="text-danger mt-2">
                {{ $message }}
            </div>
         @enderror
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea name="body"class="form-control" id="body"></textarea>
          @error('body')
            <div class="text-danger mt-2">
                {{ $message }}
            </div>
        @enderror
        <div class="col-md-3 mb-3">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
  </article><!-- /.card -->