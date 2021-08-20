@csrf
<div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select @error('hub') is-invalid @enderror" id="hub" name="hub">
        @foreach($hubs as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $announcements->title) }}">
    @error('title')
    <div class="invalid-feedback d-block">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">Description</label>
    <textarea class="summernote form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $announcements->description) }}</textarea>
    @error('description')
    <div class="invalid-feedback d-block">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">Attachment</label>
    <input type="file" class="form-control @error('attachment') is-invalid @enderror" id="attachment" name="attachment" value="{{ old('attachment', $announcements->attachment) }}">
</div>
<div class="mb-0">
    <button type="submit" class="btn btn-yellow-hub px-30">Submit</button>
</div>
