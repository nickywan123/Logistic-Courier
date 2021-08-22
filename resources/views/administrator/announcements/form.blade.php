@csrf
<div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select @error('hub') is-invalid @enderror" id="hub" name="hub">
        @foreach($hubs as $key => $value)
        <option value="{{ $key }}" {{ $key == $announcement->hub_id ? 'selected':'' }}>{{ $value }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $announcement->title) }}">
    @error('title')
    <div class="invalid-feedback d-block">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">Description</label>
    <textarea class="summernote form-control @error('description') is-invalid @enderror" id="description" name="description">{!! old('description', $announcement->description) !!}</textarea>
    @error('description')
    <div class="invalid-feedback d-block">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">Attachment</label>
    <input type="file" class="form-control @error('attachment') is-invalid @enderror" id="attachment" name="attachment" value="{{ old('attachment', $announcement->attachment) }}">
    @isset($edit)
    <input type="hidden" id="edit_attachment" name="edit_attachment" value="{{ old('attachment', $announcement->attachment) }}">
    @endisset
    @error('attachment')
    <div class="invalid-feedback d-block">
        {{ $message }}
    </div>
    @enderror
</div>
@isset($edit)
<div class="mb-3">
    <a href="{{ asset('assets/images/upload/'.$announcement->attachment) }}" class="btn btn-secondary px-30 text-white" target="_blank">View File</a>
</div>
@endisset
<div class="mb-0">
    <button type="submit" class="btn btn-yellow-hub px-30">Submit</button>
</div>
