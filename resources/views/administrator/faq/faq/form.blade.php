@csrf
<div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select" aria-label="Default select example" name="category">
        @foreach($categories as $key => $value)
            <option value="{{ $key }}" {{ (in_array($key, str_split($faq->faq_category_id))) ? 'selected' : '' }}>{{ $value }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="" class="form-label">Question</label>
    <input type="text" class="form-control" id="question" name="question" value="{{ old('question', $faq->question) }}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Answer</label>
    <textarea class="summernote form-control" id="answer" name="answer">{{ old('answer', $faq->answer) }}</textarea>
</div>
<div class="mb-0">
    <button type="submit" class="btn btn-yellow-hub px-30">Submit</button>
</div>
