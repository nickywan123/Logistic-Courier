@csrf
<div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select @error('category') is-invalid @enderror" id="category" name="category">
        @foreach($categories as $key => $value)
            <option value="{{ $key }}" {{ (in_array($key, str_split($faq->faq_category_id))) ? 'selected' : '' }}>{{ $value }}</option>
        @endforeach
    </select>
    @error('category')
    <div class="invalid-feedback d-block">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">Question</label>
    <input type="text" class="form-control @error('question') is-invalid @enderror" id="question" name="question" value="{{ old('question', $faq->question) }}">
    @error('question')
    <div class="invalid-feedback d-block">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">Answer</label>
    <textarea class="summernote form-control @error('answer') is-invalid @enderror" id="answer" name="answer">{{ old('answer', $faq->answer) }}</textarea>
    @error('answer')
    <div class="invalid-feedback d-block">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-0">
    <button type="submit" class="btn btn-yellow-hub px-30">Submit</button>
</div>
