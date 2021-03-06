<div class="row">
    <div class="col-lg-8">
        <div class="card p-4">
            <div class="row mb-2">
                <div class="col-lg-1">
                    <img src="{{ asset('/img/ava.png') }}" width="150%">
                </div>
                <div class="col-lg-8">
                    <p>Penulis</p>
                    <p class="small text-secondary mintop-1">Post 10</p>
                </div>
            </div>
            <div class="form-group">
                <label for="judul">Judul Thread</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $post->judul) }}">
            </div>
            <div class="form-group">
                <label for="editor1">Isi Thread</label>
                <textarea id="editor1" name="konten" class="form-control">{{ old('konten', $post->konten) }}</textarea>
            </div>
            
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card p-4">
            <div class="form-group">
                <label for="thumbnail">Thumbnail</label><br>
                <img src="{{ asset('storage/') }}<?= !empty($post->thumbnail) ? "/" . $post->thumbnail : '/thumbnail_thread/default.jpg' ?>" class="thumbnail-post" id="output"><br>
                <div class="custom-file mt-4 w-500">
                    <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail" onchange="loadFile(event)" accept=".jpg,.png,.jpeg">
                    <label class="custom-file-label" for="thumbnail">Choose</label>
                </div>
            </div>
            <div class="form-group">
                <label for="select1">Pilih Kategori</label>
                <select id="select1" name="category">
                    @foreach ($categories as $category)
                        <option {{ $category->id == $post->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="select2">Pilih Tag</label>
                <select id="select2" class="form-control" name="tags[]" multiple>
                    @foreach ($post->tags as $tag)
                        <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100 mt-2">{{ $submit ?? 'Post'}}</button>
            </div>
            {!! $delete ?? '' !!}
        </div>
    </div>
</div>