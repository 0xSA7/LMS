@if($errors->has($field))
    <div class="text-danger">{{ $errors->first($field) }}</div>
@endif